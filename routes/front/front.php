<?php

    use App\Http\Controllers\Auth\ClientLoginController;
    use App\Http\Controllers\Auth\ClientRegisterController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\Front\ClientTripController;
    use Illuminate\Support\Facades\Route;

    Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

        Route::group(['middleware' => 'client'], function () {

            Route::post('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');

            Route::resource('client_trips', ClientTripController::class)->except(['index', 'edit', 'update', 'destroy']);


            Route::macro('resourceAndActive', function ($url, $controller) {
                Route::get("{$url}/print/{reservation}", "App\\Http\\Controllers\\Front\\{$controller}@print")->name("{$url}.print");
                Route::get("{$url}/client_trips/", "App\\Http\\Controllers\\Front\\{$controller}@admin_show")->name("{$url}.admin_show")->withoutMiddleware('client');
                Route::resource($url, 'App\Http\Controllers\Front\\' . $controller)->except(['create','store','update','destroy'])
                    ->names(['edit' => 'success']);
            });
            Route::resourceAndActive('reservations', 'ReservationController');


            Route::get('profile', function () {
                $client = auth('client')->user();
                return view('front.profile', compact('client'));
            })->name('profile.show');

            Route::post('profile', [RegisterController::class, 'update'])->name('profile.update');

        });

        Route::view('/', 'front.home')->name('home');


        // client login
        Route::get('/client/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
        Route::post('/client/login', [ClientLoginController::class, 'login'])->name('client.login.post');

        // client register
        Route::view('/client/register', 'auth.client_register')->name('client.register');
        Route::post('/client/register', [ClientRegisterController::class, 'register'])->name('client.register');

        // all ok

    });
