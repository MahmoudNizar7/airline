<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class UserController extends Controller
    {
        public function __construct()
        {
            $this->middleware(['role:super_admin']);
        }

        public function index(Request $request)
        {
            $users = User::whereRoleIs('user')->where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where('name', 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate(10);

            return view('control/users/index', compact('users'));
        }

        public function create()
        {
            return view('control/users/create');
        }

        public function edit(User $user)
        {
            return view('control.users.edit',compact('user'));
        }

        public function destroy(User $user)
        {
            $user->delete();

            Alert::success('تم حذف المستخدم');
            return redirect()->back();
        }
    }
