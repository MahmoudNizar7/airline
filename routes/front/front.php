<?php

    use App\Http\Controllers\Auth\ClientLoginController;
    use App\Http\Controllers\Front\ClientTripController;
    use App\Http\Controllers\Front\ReservationController;
    use Illuminate\Support\Facades\Route;


    Route::group(['middleware' => 'client'], function () {

        Route::resource('reservations', ReservationController::class);
        Route::resource('client_trips', ClientTripController::class);

    });

    Route::view('/', 'front.home')->name('home');

    Route::get('/client/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
    Route::post('/client/login', [ClientLoginController::class, 'login'])->name('client.login.post');
    Route::post('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');

