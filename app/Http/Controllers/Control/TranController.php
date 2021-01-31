<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Tran;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class TranController extends Controller
    {
        public function index()
        {
            $trans = Tran::all();
            return view('control.trans.index', compact('trans'));
        }


        public function create()
        {
            //
        }


        public function store(Request $request)
        {

        }


        public function show(Tran $tran)
        {
            //
        }


        public function edit(Tran $tran)
        {
            //
        }


        public function update(Request $request)
        {

            $keys = ['Home', 'My Trips', 'Contact Us', 'Sign Up', 'Profile', 'Sign In', 'Sign Out', 'Trips Gartr', 'From', 'To', 'Trip Number',
                'Flying line', 'Price', 'Seats Number', 'Trip Date', 'Trip Hour', 'Reserve', 'Reserve Now', 'Adults', 'Children', 'Baby',
                'Username', 'Company Name', 'Address', 'Phone Number', 'Email', 'Password', 'Password Confirmation', 'First Name', 'Last Name',
                'Birth Of Date', 'Nationality', 'Passport Number', 'Passport Expiration Date', 'Total Cost', 'Options', 'Ticket details',
                'Print', 'Current balance', 'Reservation Details', 'Passenger details', 'Contact Form', 'Name', 'Topic', 'Message Text',
                'Submit', 'Reservation Type', 'confirmed reservation', 'Initial reservation', 'Reservation status',
                'Account balance statement', 'View ticket', 'Your reservation has been confirmed', 'Logo'];


            foreach ($keys as $key) {
                $value = str_replace(' ', '_', strtolower($key));
                Tran::where('key', $key)->update([
                    'value' => $request->$value
                ]);
            }

            Alert::success('تم حفظ النصوص بنجاح');
            return redirect()->back();
        }


        public function destroy(Tran $tran)
        {
            //
        }
    }
