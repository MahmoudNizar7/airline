<?php


    use App\Http\Controllers\control\BalanceController;
    use App\Http\Controllers\Control\ClientController;
    use App\Http\Controllers\Control\TripController;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

        Route::view('/', 'Control/index')->name('admin');

        Route::resource('clients', ClientController::class);
        Route::resource('balances', BalanceController::class);
        Route::resource('trips', TripController::class);

    });
