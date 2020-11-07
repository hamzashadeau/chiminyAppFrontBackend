<?php

namespace App\Http\Controllers;

use App\Models\client_Projets;
use App\Models\clientProjet;
use App\Models\clientProjets;
use App\Models\projet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class CreateUtilisateuController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view("admin.statistique");
        }
        return view('login');
    }
    public function login(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('adminDashboard');
        }
        $request->session()->flash("error","المعلومات غير صحيحة");
        return Redirect::to("login");
    }
    public function messagesCreate(){
        if(Auth::check()){
            return view('admin.messages-create');
        }
        return view('login');
    }
    public function messageShow(){
        if(Auth::check()){
            return view('admin.message-show');
        }
        return view('login');
}
public function etatFinanciereDespenceCreate(){
    if(Auth::check()){
        return view('admin.etatFinanciere-despence-create');
    }
    return view('login');
}
    public function etatFinanciereGainCreate(){
        if(Auth::check()){
            return view('admin.etatFinanciere-despence-create');
        }
        return view('login');
    }
public function projetCreate(){
    if(Auth::check()){
        return view('admin.projetCreate');
    }
    return view('login');
}
    public function respond($id){
        if(Auth::check()){
            $contact = DB::table('messages')->find($id);
            return view("admin.contact_respond")->with("contact",$contact);
        }
    }
    public function create()
    {
        User::create([
            'name' =>'hassan',
            'email' => 'hassan@gmail.com',
            'password' => Hash::make('hassan2020')
        ]);
        return view("login");
    }
    public function showCreateClientProjet(){
        if(Auth::check()){
            $data = Projet::all();
        return view('admin.createClientProjet', ['data'=>$data]);
        }
}
    public function showClientProjet(){
        if(Auth::check()){
            $data = clientProjets::latest()->paginate(10);
            return view('admin.client_Projet', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
        }
    }
public function chercher(Request $request){
    $type = $request->get('Cherche');
    $motif = $request->get('motif');
    if($type == 'client'){
        $data = DB::table('clientProjets')
            ->where('clientProjets.Nom_client','like','%'.$motif.'%')
            ->orWhere('clientProjets.prenom_client','like','%'.$motif.'%')
            ->select('clientProjets.*')
            ->distinct('clientProjets.id')->paginate(9,['client_Projets.*']);
    }
    if($type == 'date'){
        $data = DB::table('clientProjets')
            ->where('clientProjets.Nom_client','=',$motif)
            ->select('clientProjets.*')
            ->distinct('clientProjets.id')->paginate(5,['client_Projets.*']);
    }
    return view('admin.client_Projet')->with([
        'data'=>$data,
    ]);
}

}
