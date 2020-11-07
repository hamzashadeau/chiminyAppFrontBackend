<?php

namespace App\Http\Controllers;

use App\Models\etatFinanciere;
use App\Models\messages;
use App\Models\projet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\String_;
use function PHPUnit\Framework\returnValue;
use function Sodium\add;

class CreateEtatFinanciereController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'libelle'=>'required',
            'montant'=>'required',
            'date'=>'required',
            'type'=>'required',
        ]);
        $etat = new etatFinanciere();
        $etat->libelle = $request->get("libelle");
        $etat->montant = $request->get("montant");
        $etat->date = $request->get("date");
        $etat->type = $request->get("type");
        if($etat->save()){
            $request->session()->flash("success","تم تسجيل رسالتك بنجاح");
        }
        else{
            $request->session()->flash("error   ","لم نستطع تسجيل رسالتك، المرجوا المحاولة من جديد!");
        }
         return redirect()->back();
    }
    //
    function getDespence()
    {
        $data = etatFinanciere::latest()->paginate(5);
        return view('admin.etatFinanciere-Despence-Show', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    function getGain()
    {
        $data = etatFinanciere::latest()->paginate(5);
        return view('admin.etatFinanciere-gain-Show', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function  chercherParMois(Request $request){
        $start_date = Carbon::parse($request->get('start_date'))
            ->toDateTimeString();

        $end_date = Carbon::parse($request->get('end_date'))
            ->toDateTimeString();
        $data = DB::table('etat_financieres')
            ->whereBetween('etat_financieres.date',[$start_date,$end_date])
            ->get();
        return view('admin.etatFinanciere-Despence-Show')->with([
            'data'=>$data,
        ]);
    }
}
