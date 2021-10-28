<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Call;
use App\Models\Car;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $cars = Car::orderBy('id', 'desc')->get();
        return view('landing.index', [
            'categories' => $categories,
            'cars' => $cars
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function thanks()
    {
        return view('landing.thanks');
    }

    /**
     * @param $car_url
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function car($car_url)
    {
        $car = Car::where('url', $car_url)->first();
        $cars = Car::orderBy('id', 'desc')->get();
        $categories = Category::orderBy('id', 'desc')->get();

        if (!$car) {
            return redirect()->route('landing.index');
        }

        return view('landing.car', ['car' => $car, 'cars' => $cars, 'categories' => $categories]);
    }

    /**
     * @param Request $request
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function languageChange(Request $request, $locale)
    {
        if (!in_array($locale, ['en', 'ru'])) {
            abort(400);
        }
        $request->session()->put('locale', $locale);
        App::setLocale($locale);
        return back();
    }



    /**
     * CALLS
     */

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function backCall(Request $request)
    {
        $req = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
        ]);
        if ($req->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $req->errors()->toJson()
            ], 200);
        }

        Call::create($req->validated());
        return redirect()->route('landing.thanks');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function order(Request $request)
    {
        $req = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'car' => 'required',
            'date' => 'required',
            'comment' => 'required'
        ]);
        if ($req->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $req->errors()->toJson()
            ], 200);
        }
        Order::create(array_merge(['driver' => $request->driver == "on" ? 1 : 0], $req->validated()));
        return redirect()->route('landing.thanks');
    }


    public function sitemap() {
        $sitemap = app('sitemap');

        /** add item to the sitemap (url, date, priority, freq) */
        $sitemap->add(url('/'), now(), '1.0', 'weekly');
        Car::query()
            ->get()
            ->each(fn($car) => $sitemap->add(
                route('landing.car', ['car_url' => $car->url]),
                $car->updated_at,
                '0.7',
                'monthly',
                [ /* If your post has image (e.g. cover) that you want to be indexed */
                    [
                        'url' => $car->url,
                        'title' => $car->brand
                    ]
                ]
            ));

        return $sitemap->render('xml');
    }

}