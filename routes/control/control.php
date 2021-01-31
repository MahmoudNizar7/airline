<?php


    use App\Http\Controllers\control\BalanceController;
    use App\Http\Controllers\Control\ClientController;
    use App\Http\Controllers\Control\CountryController;
    use App\Http\Controllers\Control\SettingController;
    use App\Http\Controllers\Control\TranController;
    use App\Http\Controllers\Control\TripController;
    use App\Http\Controllers\Control\UserController;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

        Route::view('/', 'Control/index')->name('admin');

        Route::resource('clients', ClientController::class)->except(['store', 'update']);
        Route::resource('balances', BalanceController::class)->except(['store', 'show', 'edit', 'destroy', 'update']);
        Route::resource('trips', TripController::class)->except(['store', 'show', 'update']);
        Route::resource('countries', CountryController::class)->except(['store', 'show', 'update']);
        Route::resource('users', UserController::class)->except(['store', 'update', 'show']);
        // Route::resource('inbox', MailController::class, ['parameters' => ['destroy' => '']]);

        Route::resource('trans', TranController::class, ['parameters' => ['update' => '']]);
        Route::resource('settings', SettingController::class);

        Route::macro('resourceAndActive', function ($url, $controller) {
            Route::post("{$url}/send", "App\\Http\\Controllers\\Control\\{$controller}@reply")->name("{$url}.reply");
            Route::resource($url, 'App\Http\Controllers\Control\\'.$controller, ['parameters' => ['destroy' => '']]);
        });

        Route::resourceAndActive('inbox', 'MailController');

    });
