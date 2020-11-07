<?php

namespace App\Http\Controllers;

use App\Mail\MailRespense;
use App\Models\Contact;
use App\Models\messages;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CreateMessagesController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'content'=>'required'
        ]);
        $content = $request->get('content');
        $email = $request->get('email');
        $detail=[
            'body' => $content
        ];
        Mail::to($email)->send(new MailRespense($detail));
        return redirect()->back()->with("success","message envoyé");
    }
    public function store(Request $request){
        $request->validate([
            'nom'=>'required',
            'tel'=>'required',
            'gmail'=>'required|email',
            'sujet'=>'required',
        ]);
        $contact = new messages();
        $contact->nom = $request->get("nom");
        $contact->tel = $request->get("tel");
        $contact->gmail = $request->get("gmail");
        $contact->sujet = $request->get("sujet");
        if($contact->save()){
            $request->session()->flash("success","تم تسجيل رسالتك بنجاح");
        }
        else{
            $request->session()->flash("error   ","لم نستطع تسجيل رسالتك، المرجوا المحاولة من جديد!");
        }
        return view("contact");
    }
    function index()
    {
        $data = messages::latest()->paginate(5);
        return view('admin.messages', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //
}
