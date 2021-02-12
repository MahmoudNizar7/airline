<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Client;
    use App\Models\Control\Setting;
    use App\Models\Control\Trip;
    use App\Models\Front\ClientTrip;
    use App\Models\Front\Reservation;
    use Illuminate\Http\Request;

    class ReservationController extends Controller
    {
        public function index()
        {
            $trips = Trip::all();
            return view('front.home', ['trips' => $trips]);
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show($id)
        {
            $client = Client::find($id);
            $reservations = Reservation::with('trip')->where('client_id', $id)->get();
            return view('front.show_reservations', compact('client', 'reservations'));
        }

        public function print($reservation_id)
        {
            $data = Setting::whereIn('key', ['location', 'email', 'image', 'phone'])->get();
            $reservation = Reservation::whereId($reservation_id)->first();
            $client_trips = ClientTrip::where('reservation_id', $reservation->id)->get();

            return view('front.print', compact('reservation', 'client_trips', 'data'));
        }

        public function edit(Reservation $reservation)
        {
            return view('front.success', compact('reservation'));
        }

        public function update(Request $request, Reservation $reservation)
        {
            //
        }

        public function destroy(Reservation $reservation)
        {
            //
        }
    }
