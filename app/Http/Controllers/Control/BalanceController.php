<?php

    namespace App\Http\Controllers\control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Movement;
    use App\Models\Front\ClientTrip;
    use App\Models\Front\Reservation;

    class BalanceController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth')->except('show');
            $this->middleware('client')->only('show');
        }

        public function index()
        {
            $movements = Movement::orderBy('client_id')->paginate(10);
            // $balances = Balance::orderBy('id', 'desc')->paginate(10);

            return view('control.balances.index', compact('movements'));
        }

        public function create()
        {
            return view('control.balances.recharge');
        }

        public function show($id)
        {
            $movements = Movement::where('client_id', $id)->get();
            return view('front.show_balance', compact('movements'));
        }

        public function admin_show($PNR)
        {
            $reservation = Reservation::where('PNR', $PNR)->first();
            $client_trips = ClientTrip::where('reservation_id', $reservation->id)->get();

            return view('control.balances.show_trips', compact( 'client_trips'));
        }

    }
