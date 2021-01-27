<?php


    use App\Http\Controllers\Control\ClientController;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

        Route::view('/', 'Control/index')->name('admin');

        Route::resource('clients', ClientController::class);

    });
