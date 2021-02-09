<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Client;
    use App\Models\Control\Movement;
    use App\Models\Control\Trip;
    use App\Models\Front\ClientTrip;
    use App\Models\Front\Reservation;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
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
            $adults = $request->adults_no != null ?: 0;
            $children = $request->children_no != null ?: 0;
            $baby = $request->baby_no != null ?: 0;

            $trip = Trip::findOrFail($request->trip_id);

            $request->validate([
                'type' => 'required',
            ]);

            // validate
            if ($adults > 0) {

                $request->validate([
                    'adults.first_name.*' => 'required',
                    'adults.last_name.*' => 'required',
                    'adults.bod.*' => 'required',
                    'adults.nationality.*' => 'required',
                    'adults.passport_no.*' => 'required',
                    'adults.passport_ex_date.*' => 'required',
                ]);

                $no = $adults - 1;
                for ($no; $no >= 0; $no--) {

                    if (!Str::contains(Carbon::parse($trip->date)->diffForHumans($request->adults['passport_ex_date'][$no]), 'قبل')) {
                        Alert::error('يجب ان يكون جواز السفر صالح حتى تاريخ ' . date('Y-m-d', strtotime($trip->date)));
                        return redirect()->back();
                    }

                }
            }
            if ($children > 0) {

                $request->validate([
                    'children.first_name.*' => 'required',
                    'children.last_name.*' => 'required',
                    'children.bod.*' => 'required',
                    'children.nationality.*' => 'required',
                    'children.passport_no.*' => 'required',
                    'children.passport_ex_date.*' => 'required',
                ]);

                $no = $children - 1;
                for ($no; $no >= 0; $no--) {

                    if (!Str::contains(Carbon::parse($trip->date)->diffForHumans($request->children['passport_ex_date'][$no]), 'قبل')) {
                        Alert::error('يجب ان يكون جواز السفر صالح حتى تاريخ ' . date('Y-m-d', strtotime($trip->date)));
                        return redirect()->back();
                    }

                }
            }
            if ($baby > 0) {

                $request->validate([
                    'baby.first_name.*' => 'required',
                    'baby.last_name.*' => 'required',
                    'baby.bod.*' => 'required',
                    'baby.nationality.*' => 'required',
                    'baby.passport_no.*' => 'required',
                    'baby.passport_ex_date.*' => 'required',
                ]);

                $no = $baby - 1;
                for ($no; $no >= 0; $no--) {

                    if (Carbon::parse($request->baby['bod'][$no])->diff($trip->date)->format('%y') > 3) {
                        Alert::error('عمر الطفل يجب ان يكون اقل من ثلاث اعوام');
                        return redirect()->back();
                    }
                    if (!Str::contains(Carbon::parse($trip->date)->diffForHumans($request->baby['passport_ex_date'][$no]), 'قبل')) {
                        Alert::error('يجب ان يكون جواز السفر صالح حتى تاريخ ' . date('Y-m-d', strtotime($trip->date)));
                        return redirect()->back();
                    }

                }
            }

            // reservation in db
            $cost = ($trip->price * $adults) + ($trip->price * $children) + ($trip->baby_price * $baby);
            $reservation = Reservation::create([
                'PNR' => Keygen::token(6)->generate(),
                'confirmation' => $request->type,
                'adult' => $adults,
                'children' => $children,
                'baby' => $baby,
                'cost' => $cost,
                'trip_id' => $request->trip_id,
                'client_id' => auth('client')->id(),
            ]);

            if ($adults > 0) {
                $no = $adults - 1;
                for ($no; $no >= 0; $no--) {
                    ClientTrip::create([
                        'first_name' => $request->adults['first_name'][$no],
                        'last_name' => $request->adults['last_name'][$no],
                        'DOB' => $request->adults['bod'][$no],
                        'nationality' => $request->adults['nationality'][$no],
                        'passport_no' => $request->adults['passport_no'][$no],
                        'passport_expiration_date' => $request->adults['passport_ex_date'][$no],
                        'type' => 'adult',
                        'reservation_id' => $reservation->id
                    ]);
                }
            }

            if ($children > 0) {
                $no = $children - 1;
                for ($no; $no >= 0; $no--) {
                    ClientTrip::create([
                        'first_name' => $request->children['first_name'][$no],
                        'last_name' => $request->children['last_name'][$no],
                        'DOB' => $request->children['bod'][$no],
                        'nationality' => $request->children['nationality'][$no],
                        'passport_no' => $request->children['passport_no'][$no],
                        'passport_expiration_date' => $request->children['passport_ex_date'][$no],
                        'type' => 'children',
                        'reservation_id' => $reservation->id
                    ]);
                }
            }

            if ($baby > 0) {
                $no = $baby - 1;
                for ($no; $no >= 0; $no--) {
                    ClientTrip::create([
                        'first_name' => $request->baby['first_name'][$no],
                        'last_name' => $request->baby['last_name'][$no],
                        'DOB' => $request->baby['bod'][$no],
                        'nationality' => $request->baby['nationality'][$no],
                        'passport_no' => $request->baby['passport_no'][$no],
                        'passport_expiration_date' => $request->baby['passport_ex_date'][$no],
                        'type' => 'baby',
                        'reservation_id' => $reservation->id
                    ]);
                }
            }


            $client = Client::with(['balance'])->find(auth('client')->id());
            $final_balance = $client->balance->balance - $cost;

            $client->balance->update([
                'balance' => $final_balance
            ]);

            $seats = $adults + $children + $baby;
            $trip->update([
                'seats' => $trip->seats - $seats
            ]);

            Movement::create([
                'client_id' => auth('client')->id(),
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
