<?php

namespace App\Http\Controllers\Admin\Rent;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{

    public function index(Request $request)
    {
        $object = new Car();
        $search = $request->search;
        if (isset($search) && !empty($search)) {
            $object = $object->where('id', 'LIKE', $search)
                ->orWhere('brand', 'LIKE', $search);
        }
        $cars = $object->orderBy('id', 'desc')->paginate(12);
        return view('admin.rent.index', ['cars' => $cars]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            return $this->createOrUpdateCars((object)$request->all());
        }
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.rent.create', ['categories' => $categories]);
    }

    public function edit(Request $request, Car $car)
    {
        if ($request->isMethod('post')) {
            return $this->createOrUpdateCars((object)$request->all(), $car->id);
        }
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.rent.edit', ['car' => $car, 'categories' => $categories]);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.rent.cars')->with('message', 'Машина была успешно удалена');
    }


    /**
     * Handles
     * @param object $request
     * @param null $car
     * @return \Illuminate\Http\JsonResponse
     */
    public function createOrUpdateCars($request, $car = null)
    {
        $rules = [
            'category_id' => 'required',
            'brand' => 'required|string',
            'brand_en' => 'required|string',
            'year' => 'required|numeric',
            'passenger_seats' => 'required|numeric',
            'length' => 'required|numeric',
            'weight' => 'required|numeric',
            'width' => 'required|numeric',
            'maximum_speed' => 'required|numeric',
            'height' => 'required|numeric',
            'trunk' => 'required|numeric',
            'power' => 'required|numeric',
            'engine_volume' => 'required|numeric',
            'acceleration_time' => 'required|string',
            'peculiarities' => 'required',
            'description' => 'required',
            'peculiarities_en' => 'required',
            'description_en' => 'required',
            'preview' => 'required|file',
            'price_with_driver' => 'required|numeric',
            'car_feed' => 'required|numeric',
            'rate_without_driver' => 'required',
            'seo_description' => 'required',
            'seo_tags' => 'required',
            'seo_title' => 'required',
            'url' => 'required',
            'transfer' => 'numeric',
            'pledge' => 'numeric',
            'video_url' => 'max:5000',
        ];

        $carData = Car::where('id', $car)->first();
        if (!isset($request->preview) && $carData) {
            unset($rules['preview']);
        }

        $req = Validator::make((array)$request, $rules);
        if ($req->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $req->errors()->toJson()
            ], 200);
        }

        try {
            $request = (object)$request;
            if (count($request->gallery) > 0) {
                for ($index = 0; $index < count($request->gallery); $index++) {
                    if (isset($request->gallery[$index]['image'])) {
                        $response = $this->uploadImage('gallery', $request->gallery[$index]['image']);
                        $request->gallery[$index]['image'] = $response;
                    }
                }
            }

            if (isset($request->preview)) {
                $preview = $this->uploadImage('previews', $request->preview);
            } else {
                $preview = $carData->preview;
            }

            if ($carData) {
                if (json_decode($carData->gallery) != null) {
                    $request->gallery = array_merge($request->gallery, json_decode($carData->gallery, true));
                }


                $carData->update(array_merge($req->validated(), [
                    'preview' => $preview,
                    'gallery' => json_encode($request->gallery),
                    'url' => str_slug($request->brand),
                    'rate_without_driver' => json_encode($request->rate_without_driver),
                    'car_with_driver' => isset($request->car_with_driver) && $request->car_with_driver == "true" ? 1 : 0,
                    'car_without_driver' => isset($request->car_without_driver) && $request->car_without_driver == "true" ? 1 : 0,
                    'enabled_video' => isset($request->enabled_video) && $request->enabled_video == "true" ? 1 : 0
                ]));
                return response()->json([
                    "status" => true,
                    "redirect" => route('admin.rent.cars.edit', ['car' => $carData->id])
                ]);
            }

            $car = Car::create(array_merge($req->validated(), [
                'preview' => $preview,
                'gallery' => json_encode($request->gallery),
                'url' => str_slug($request->brand),
                'rate_without_driver' => json_encode($request->rate_without_driver),
                'car_with_driver' => isset($request->car_with_driver) && $request->car_with_driver == "true" ? 1 : 0,
                'car_without_driver' => isset($request->car_without_driver) && $request->car_without_driver == "true" ? 1 : 0,
                'enabled_video' => isset($request->enabled_video) && $request->enabled_video == "true" ? 1 : 0
            ]));

            return response()->json([
                "status" => true,
                "redirect" => route('admin.rent.cars.edit', ['car' => $car->id])
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                "status" => false,
                "errors" => json_encode(['error' => ['Упс.. Что-то пошло не так!']])
            ], 200);
        }
    }


    public function uploadImage($catalog, $image)
    {
        $length = mt_rand(10, 15);
        $randomString = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            ceil($length / strlen($x)))), 1, $length);
        $imageName = time() . $randomString . "." . $image->extension();
        $image->move(public_path('static/' . $catalog), $imageName);
        return 'static/' . $catalog . "/" . $imageName;
    }


    public function removeImage(Car $car, Request $request)
    {
        $image = $request->image;
        $gallery = json_decode($car->gallery);
        if(file_exists(public_path($image))) {
            unlink(public_path($image));
        }
        unset($gallery[array_search($image, $gallery)]);
        $car->gallery = json_encode($gallery);
        $car->save();
        return redirect()->route('admin.rent.cars.edit', ['car' => $car->id]);
    }


}