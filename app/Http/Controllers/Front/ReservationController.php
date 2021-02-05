<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Trip;
    use App\Models\Front\Reservation;
    use Illuminate\Http\Request;

    class ReservationController extends Controller
    {
        public function index()
        {
            $trips = Trip::all();
            return view('front.trips', compact('trips'));
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Reservation $reservation)
        {
            //
        }

        public function edit(Reservation $reservation)
        {
            //
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
