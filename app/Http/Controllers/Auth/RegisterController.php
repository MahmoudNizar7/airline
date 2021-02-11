<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Client;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Validation\Rule;
    use RealRashid\SweetAlert\Facades\Alert;

    class RegisterController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Register Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles the registration of new users as well as their
        | validation and creation. By default this controller uses a trait to
        | provide this functionality without requiring any additional code.
        |
        */

        use RegistersUsers;

        /**
         * Where to redirect users after registration.
         *
         * @var string
         */
        //

        protected $redirectTo = '/';

        protected function redirectTo()
        {
            if (auth()->check()) {
                return redirect()->route('admin');
            } elseif (auth('client')->check()) {
                return redirect()->route('home');
            }
        }


        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('guest');
        }

        public function update(Request $request)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('clients', 'email')->ignore(auth('client')->id())],
                'company' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'max:15'],
            ]);

            auth('client')->user()->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'company' => $request['company'],
                'address' => $request['address'],
                'phone' => $request['phone'],
            ]);

            Alert::success('تم تعديل البيانات بنجاح');
            return redirect()->route('profile.show');

        }

        /**
         * Get a validator for an incoming registration request.
         *
         * @param array $data
         * @return \Illuminate\Contracts\Validation\Validator
         */
        protected function validator(array $data)
        {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
                'company' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'max:15'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }

        /**
         * Create a new user instance after a valid registration.
         *
         * @param array $data
         * @return \App\Models\User
         */
        protected function create(array $data)
        {
            $client = Client::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'company' => $data['company'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password'])
            ]);
            $client->attachRole('client');
            return $client;
        }

    }
