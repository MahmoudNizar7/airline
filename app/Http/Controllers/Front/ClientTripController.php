<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Trip;
    use App\Models\Front\ClientTrip;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class ClientTripController extends Controller
    {
        public function index()
        {
            //
        }

        public function create(Request $request)
        {
            $adults = $request->adults;
            $children = $request->children;
            $baby = $request->baby;
            $seats = $adults + $children + $baby;

            $trip = Trip::findOrFail(1);

            if ($seats <= $trip->seats) {
                return view('front.reservations.create', compact('adults', 'children', 'baby'));
            }
            Alert::error('تجاوز عدد المقاعد المتوفرة');
            return redirect()->back();
        }

        public function store(Request $request)
        {
            
        }

        public function show(ClientTrip $clientTrip)
        {
            //
        }

        public function edit(ClientTrip $clientTrip)
        {
            //
        }

        public function update(Request $request, ClientTrip $clientTrip)
        {
            //
        }

        public function destroy(ClientTrip $clientTrip)
        {
            //
        }
    }
