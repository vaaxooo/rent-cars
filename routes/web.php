<?php

use Illuminate\Support\Facades\Route;


/*
 * ADMIN ROUTES
 * */
Route::group(['prefix' => 'admin'], function () {
    /**
     * AUTH ROUTES
     */
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/login',
            '\App\Http\Controllers\Admin\Account\AuthController@login')->name('admin.auth.login');
        Route::post('/login',
            '\App\Http\Controllers\Admin\Account\AuthController@login')->name('admin.auth.login');
    });


    /**
     * ADMIN PANEL ROUTES
     */
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout',
            '\App\Http\Controllers\Admin\Account\AuthController@logout')->name('admin.auth.logout');

        Route::get('/', function () {
            return view('admin.index');
        })->name('admin.index');

        Route::get('/rent/cars', '\App\Http\Controllers\Admin\Rent\CarController@index')->name('admin.rent.cars');
        Route::get('/rent/cars/add',
            '\App\Http\Controllers\Admin\Rent\CarController@create')->name('admin.rent.cars.add');
        Route::post('/rent/cars/add',
            '\App\Http\Controllers\Admin\Rent\CarController@create')->name('admin.rent.cars.add');
        Route::get('/rent/cars/{car}/edit',
            '\App\Http\Controllers\Admin\Rent\CarController@edit')->name('admin.rent.cars.edit');
        Route::post('/rent/cars/{car}/edit',
            '\App\Http\Controllers\Admin\Rent\CarController@edit')->name('admin.rent.cars.edit');
        Route::get('/rent/cars/{car}/remove-image',
            '\App\Http\Controllers\Admin\Rent\CarController@removeImage')->name('admin.rent.cars.remove_image');
        Route::get('/rent/cars/{car}/delete',
            '\App\Http\Controllers\Admin\Rent\CarController@destroy')->name('admin.rent.cars.delete');

        Route::get('/categories',
            '\App\Http\Controllers\Admin\Categories\CategoryController@index')->name('admin.categories');
        Route::get('/categories/add',
            '\App\Http\Controllers\Admin\Categories\CategoryController@create')->name('admin.categories.add');
        Route::post('/categories/add',
            '\App\Http\Controllers\Admin\Categories\CategoryController@create')->name('admin.categories.add');
        Route::get('/categories/{category}/edit',
            '\App\Http\Controllers\Admin\Categories\CategoryController@edit')->name('admin.categories.edit');
        Route::post('/categories/{category}/edit',
            '\App\Http\Controllers\Admin\Categories\CategoryController@edit')->name('admin.categories.edit');
        Route::get('/categories/{category}/delete',
            '\App\Http\Controllers\Admin\Categories\CategoryController@destroy')->name('admin.categories.delete');
    });
});

/**
 * END ADMIN ROUTES
 */