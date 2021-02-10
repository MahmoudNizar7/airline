<?php

    use App\Http\Controllers\Auth\ClientLoginController;
    use App\Http\Controllers\Front\ClientTripController;
    use Illuminate\Support\Facades\Route;


    Route::group(['middleware' => 'client'], function () {

        //Route::resource('reservations', ReservationController::class);
        Route::resource('client_trips', ClientTripController::class);

        Route::macro('resourceAndActive', function ($url, $controller) {
            Route::get("{$url}/print/{reservation}", "App\\Http\\Controllers\\Front\\{$controller}@print")->name("{$url}.print");
            Route::resource($url, 'App\Http\Controllers\Front\\' . $controller);
        });

        Route::resourceAndActive('reservations', 'ReservationController');
    });

    Route::view('/', 'front.home')->name('home');

    Route::get('/client/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
    Route::post('/client/login', [ClientLoginController::class, 'login'])->name('client.login.post');
    Route::post('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');

    Route::view('contact-us', 'front.contact')->name('contact');
