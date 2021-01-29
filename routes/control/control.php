<?php


    use App\Http\Controllers\control\BalanceController;
    use App\Http\Controllers\Control\ClientController;
    use App\Http\Controllers\Control\CountryController;
    use App\Http\Controllers\Control\MailController;
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
        Route::resource('inbox', MailController::class);

    });
