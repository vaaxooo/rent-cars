<?php

namespace App\Http\Controllers\Admin;

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

    public function orders() {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function ordersDelete(Order $order) {
        $order->delete();
        return redirect()->route('admin.orders');
    }

    public function calls() {
        $calls = Call::orderBy('id', 'desc')->get();
        return view('admin.calls', ['calls' => $calls]);
    }

    public function callsDelete(Call $call) {
        $call->delete();
        return redirect()->route('admin.calls');
    }

}