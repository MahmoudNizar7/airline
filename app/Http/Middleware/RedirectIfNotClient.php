<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;

    class RedirectIfNotClient
    {
        /**
         * Handle an incoming request.
         *
         * @param Request $request
         * @param \Closure $next
         * @param string $guard
         * @return mixed
         */
        public function handle(Request $request, Closure $next, $guard = "client")
        {
            if (!auth()->guard($guard)->check()) {
                return redirect(route('client.login'));
            }
            return $next($request);
        }
    }
