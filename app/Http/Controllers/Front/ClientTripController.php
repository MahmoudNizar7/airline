<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Client;
    use App\Models\Control\Movement;
    use App\Models\Control\Trip;
    use App\Models\Front\ClientTrip;
    use App\Models\Front\Reservation;
    use Illuminate\Http\Request;
    use Keygen\Keygen;
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

            $trip = Trip::findOrFail($request->trip_id);


            if ($seats <= $trip->seats) {

                $cost = ($trip->price * $adults) + ($trip->price * $children) + ($trip->baby_price * $baby);

                if ($cost < auth('client')->user()->balance->balance) {
                    return view('front.reservations', compact('adults', 'children', 'baby', 'trip'));
                }
                Alert::error('ليس لديك رصيد كافي!');
                return redirect()->back();

            }
            Alert::error('تجاوز عدد المقاعد المتوفرة');
            return redirect()->back();
        }

        public function store(Request $request)
        {
            $adults = $request->adults;
            $children = $request->children;
            $baby = $request->baby;

            $trip = Trip::findOrFail($request->trip_id);

            $cost = ($trip->price * $adults) + ($trip->price * $children) + ($trip->baby_price * $baby);

            $reservation = Reservation::create([
                'PNR' => Keygen::token(6)->generate(),
                'confirmation' => $request->confirmation,
                'adult' => $adults,
                'children' => $children,
                'baby' => $baby,
                'cost' => $cost,
                'trip_id' => $request->trip_id,
                'client_id' => auth()->id(),
            ]);

            $number = $adults + $children + $baby - 1;
            for ($number; $number >= 0; $number--) {
                ClientTrip::create([
                    'first_name' => $request->first_name[$number],
                    'last_name' => $request->last_name[$number],
                    'dob' => $request->dob[$number],
                    'nationality' => $request->nationality[$number],
                    'passport_no' => $request->passport_no[$number],
                    'passport_expiration_date' => $request->ped[$number],
                    'type' => $request->type[$number],
                    'reservation_id' => $reservation->id,
                ]);
            }

            $client = Client::with(['balance'])->find(auth()->id());
            $final_balance = $client->balance->balance - $cost;

            $client->balance->update([
                'balance' => $final_balance
            ]);

            Movement::create([
                'client_id' => auth()->id(),
                'balance_id' => $client->balance->id,
                'value' => '-' . $cost,
                'remainder' => $final_balance,
                'about' => $reservation->PNR
            ]);

            Alert::success('تم الحجز بنجاح');
            return redirect()->back();

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
