<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Login Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles authenticating users for the application and
        | redirecting them to your home screen. The controller uses a trait
        | to conveniently provide its functionality to your applications.
        |
        */

        use AuthenticatesUsers;

        /**
         * Where to redirect users after login.
         *
         * @var string
         */

        // protected $redirectTo = '/admin';

        public function __construct()
        {
            $this->middleware('guest')->except('logout');
        }


        protected function authenticated()
        {
            if (auth()->check()) {
                return redirect()->route('admin');
            } elseif (auth('client')->check()) {
                return redirect()->route('home');
            }
        }

        public function logout()
        {
            Auth::guard('web')->logout();
            Auth::guard('client')->logout();
        }
    }
