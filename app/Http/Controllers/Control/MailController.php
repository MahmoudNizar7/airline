<?php

    namespace App\Http\Controllers\Control;

    use App\Http\Controllers\Controller;
    use App\Mail\ReplyClient;
    use App\Models\Control\Mail;
    use Illuminate\Http\Request;
    use RealRashid\SweetAlert\Facades\Alert;

    class MailController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth')->except(['create', 'store']);
        }

        public function index()
        {
            $messages = Mail::orderBy('created_at', 'desc')->paginate(10);
            return view('control.mails.index', compact('messages'));
        }

        public function show($id)
        {
            $mail = Mail::find($id);
            return view('control.mails.show', compact('mail'));
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

        public function reply(Request $request)
        {
            $details = ['title' => $request->title, 'body' => $request->body];
            \Illuminate\Support\Facades\Mail::to($request->to)->send(new ReplyClient($details));
            Alert::success('تم الإرسال بنجاح');
            return redirect()->route('inbox.index');
        }

        public function create()
        {
            return view('front.contact');
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|max:300',
                'phone' => 'required|max:15',
                'nationality' => 'required',
                'message' => 'required',
            ]);

            Mail::create([
                'name' => $request->name,
                'email' => $request->email,
                'title' => $request->nationality . '' . $request->phone,
                'body' => $request->message,
            ]);

            Alert::success('تم الإرسال بنجاح');
            return redirect()->route('inbox.create');
        }

    }
