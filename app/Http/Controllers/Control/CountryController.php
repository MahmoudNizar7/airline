<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Country;
    use Illuminate\Http\Request;
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
    use RealRashid\SweetAlert\Facades\Alert;

    class CountryController extends Controller
    {
        public function index(Request $request)
        {
            $countries = Country::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where('name_' . LaravelLocalization::getCurrentLocale(), 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate(10);

            // $countries = Country::orderBy('id')->paginate(10);
            return view('control/countries/index', compact('countries'));
        }

        public function create()
        {
            return view('control/countries/create');
        }

        public function edit(Country $country)
        {
            return view('control/countries/edit', compact('country'));
        }

        public function destroy(Country $country)
        {
            if ($country->image != '') {
                unlink(public_path('assets/images/countries/') . $country->image);
            }
            $country->delete();

            Alert::success('تم حذف الدولة');
            return redirect()->back();

        }
    }
