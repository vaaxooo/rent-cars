<?php

namespace App\Http\Controllers\Admin\Rent;

use App\Http\Controllers\Controller;

class CarController extends Controller {

    public function index() {
        return view('admin.rent.index');
    }

    public function create() {
        return view('admin.rent.create');
    }

    public function edit() {
        return view('admin.rent.edit');
    }

}