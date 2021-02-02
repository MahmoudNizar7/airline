<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Setting;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;
    use Intervention\Image\Facades\Image;
    use RealRashid\SweetAlert\Facades\Alert;

    class SettingController extends Controller
    {

        public function index()
        {
            $settings = Setting::orderBy('id')->get();
            return view('control.settings.index', compact('settings'));
        }


        public function profile_show()
        {
            return view('control.settings.profile');
        }

        public function profile_update(Request $request)
        {
            $request->validate([
                'name' => 'required'
            ]);
            if ($request->name != auth()->user()->name) {
                auth()->user()->update(['name' => $request->name]);
                Alert::success('تم حفظ التغييرات بنجاح');
                return redirect()->route('profile.show');
            } else {
                Alert::error('لم تقم بعمل اي تغييرات');
                return redirect()->route('profile.show');
            }
        }

        public function password_update(Request $request)
        {
            $role = 'required|min:6|max:100';
            $request->validate([
                'old_password' => $role,
                'new_password' => $role,
                'confirmation_password' => 'required|same:new_password',
            ]);

            if (Hash::check($request->old_password, auth()->user()->password)) {

                auth()->user()->update([
                    'password' => bcrypt($request->new_password)
                ]);

                Alert::success('تم حفظ التغييرات بنجاح');
                session::flash('tap_name','m_user_profile_tab_2');
                return redirect()->route('profile.show')->withInput();

            }

            Alert::error('كلمة المرور القديمة غير صحيحة');
            session::flash('tap_name','m_user_profile_tab_2');
            return redirect()->route('profile.show')->withInput();

        }

        public function store(Request $request)
        {
            $keys = ['title', 'description', 'tags', 'rights', 'location', 'link', 'facebook', 'twitter', 'instagram', 'whatsapp', 'linkedin', 'youtube', 'pinterest', 'snapchat', 'email', 'phone'];

            foreach ($keys as $key) {
                Setting::where('key', $key)->update(['value' => $request->$key]);
            }

            if ($request->hasFile('image')) {

                $request->validate([
                    'file' => 'mimes:jpg,jpeg,gif,png|max:20000',
                ]);

                $image = $request->file('image');
                $result = Setting::where(['key' => 'image'])->first();
                if ($result->value != '') {
                    unlink(public_path('assets/images/') . $result->value);
                }
                Image::make($image)
                    ->resize('300', null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('assets/images/') . $image->hashName());

                $result->update(['value' => $image->hashName()]);
            }

            Alert::success('تم حفظ التغييرات بنجاح');
            return redirect()->route('settings.index');
        }

    }
