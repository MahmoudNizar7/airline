<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Trip;
    use Illuminate\Http\Request;

    class TripController extends Controller
    {

        public function index(Request $request)
        {
            $trips = Trip::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where('travel_no', 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate(10);


            // $trips = Trip::orderBy('id')->paginate(5);
            return view('control/trips/index', compact('trips'));
        }


        public function create()
        {
            return view('control.trips.create');
        }


        public function store(Request $request)
        {
            //
        }


        public function show(Trip $trip)
        {
            //
        }


        public function edit(Trip $trip)
        {
            //
        }


        public function update(Request $request, Trip $trip)
        {
            //
        }


        public function destroy(Trip $trip)
        {
            //
        }
    }
