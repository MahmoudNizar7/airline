<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Setting;
    use Illuminate\Http\Request;
    use Intervention\Image\Facades\Image;
    use RealRashid\SweetAlert\Facades\Alert;

    class SettingController extends Controller
    {

        public function index()
        {
            $settings = Setting::orderBy('id')->get();
            return view('control.settings.index', compact('settings'));
        }


        public function create()
        {
            //
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


        public function show(Setting $setting)
        {
            //
        }


        public function edit(Setting $setting)
        {
            //
        }

        public function update(Request $request, Setting $setting)
        {
            //
        }


        public function destroy(Setting $setting)
        {
            //
        }
    }
