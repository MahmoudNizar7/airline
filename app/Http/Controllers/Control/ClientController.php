<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Client;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class ClientController extends Controller
    {

        public function __construct()
        {
            $this->middleware(['role:super_admin']);
        }

        public function index(Request $request)
        {
            $clients = Client::whereRoleIs('client')->where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where('name', 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate(10);

            return view('control/clients/index', compact('clients'));
        }

        public function create()
        {
            return view('control/clients/create');
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Client $client)
        {
            //
        }

        public function edit(Client $client)
        {
            return view('control.clients.edit',compact('client'));
        }

        public function update(Request $request, Client $client)
        {
            //
        }

        public function destroy(Client $client)
        {
            if ($client->image != '') {
                unlink(public_path('assets/images/clients/') . $client->image);
            }
            $client->delete();

            Alert::success('تم حذف العميل');
            return redirect()->back();


        }
    }
