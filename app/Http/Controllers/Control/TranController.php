<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Tran;
    use App\Traits\Keys;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class TranController extends Controller
    {
        use Keys;

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
            foreach ($this->keys() as $key) {
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
