<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Models\Control\Mail;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class MailController extends Controller
    {
        public function index()
        {
            $messages = Mail::orderBy('created_at', 'desc')->paginate(10);
            return view('control.mails.index', compact('messages'));
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show($id)
        {
            $mail = Mail::find($id);
            return view('control.mails.show', compact('mail'));
        }

        public function edit(Mail $mail)
        {
            //
        }

        public function update(Request $request, Mail $mail)
        {
            //
        }

        public function destroy(Request $request)
        {
            if (empty($request->message_id)) {
                return redirect()->back();
            } else {
                Mail::whereIn('id', $request->message_id)->delete();
                Alert::success('تم حذف الرسالة بنجاح');
                return redirect()->back();
            }
        }

    }
