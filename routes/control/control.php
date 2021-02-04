<?php


    use App\Http\Controllers\control\BalanceController;
    use App\Http\Controllers\Control\CountryController;
    use App\Http\Controllers\Control\SettingController;
    use App\Http\Controllers\Control\TranController;
    use App\Http\Controllers\Control\TripController;
    use App\Http\Controllers\Control\UserController;
    use App\Http\Controllers\Front\ClientTripController;
    use App\Http\Controllers\Front\ReservationController;
    use App\Models\Control\Client;
    use App\Models\Control\Mail;
    use App\Models\Control\Setting;
    use App\Models\Control\Trip;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

        Route::get('/', function () {
            $image = Setting::where('key', 'image')->first();
            $clients = Client::all();
            $trips = Trip::all();
            $mails = Mail::all();
            return view('Control/index', compact('image', 'clients', 'trips', 'mails'));
        })->name('admin');

        Route::macro('resourceAndActive', function ($url, $controller) {
            Route::get("{$url}/export", "App\\Http\\Controllers\\Control\\{$controller}@export")->name("{$url}.export");
            Route::resource($url, 'App\Http\Controllers\Control\\' . $controller);
        });

        Route::resourceAndActive('clients', 'ClientController');


        Route::resource('balances', BalanceController::class)->except(['store', 'show', 'edit', 'destroy', 'update']);
        Route::resource('trips', TripController::class)->except(['store', 'show', 'update']);
        Route::resource('countries', CountryController::class)->except(['store', 'show', 'update']);
        Route::resource('users', UserController::class)->except(['store', 'update', 'show']);


        Route::resource('trans', TranController::class, ['parameters' => ['update' => '']]);
        Route::resource('settings', SettingController::class)->only(['index', 'store']);
        Route::get('settings/profile', [SettingController::class, 'profile_show'])->name('profile.show');
        Route::post('settings/profile', [SettingController::class, 'profile_update'])->name('profile.update');
        Route::post('settings/password', [SettingController::class, 'password_update'])->name('password.update');

        Route::macro('resourceAndActive', function ($url, $controller) {
            Route::post("{$url}/send", "App\\Http\\Controllers\\Control\\{$controller}@reply")->name("{$url}.reply");
            Route::resource($url, 'App\Http\Controllers\Control\\' . $controller, ['parameters' => ['destroy' => '']])->except(['create', 'store', 'edit', 'update']);
        });

        Route::resourceAndActive('inbox', 'MailController');


        Route::resource('reservations', ReservationController::class);
        Route::resource('client_trips', ClientTripController::class);
    });

    Route::get('test_trip', [ClientTripController::class, 'create']);
