<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Client;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;

    class ClientRegisterController extends Controller
    {
        use RegistersUsers;

        public function showRegistrationForm()
        {
            return view('auth.client_register');
        }

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

        public function guard()
        {
            return Auth::guard('client');
        }
    }
