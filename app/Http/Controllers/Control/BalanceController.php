<?php

    namespace App\Http\Controllers\control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Balance;
    use App\Models\Control\Movement;
    use Illuminate\Http\Request;

    class BalanceController extends Controller
    {
        public function index()
        {
            $movements = Movement::orderBy('client_id')->paginate(10);
            // $balances = Balance::orderBy('id', 'desc')->paginate(10);

            return view('control.balances.index', compact('movements'));
        }

        public function create()
        {
            return view('control.balances.recharge');
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Balance $balance)
        {
            //
        }

        public function edit(Balance $balance)
        {
            //
        }

        public function update(Request $request, Balance $balance)
        {
            //
        }

        public function destroy(Balance $balance)
        {
            //
        }
    }
