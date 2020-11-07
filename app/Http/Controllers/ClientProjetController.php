<?php

namespace App\Http\Controllers;

use App\Models\client_Projets;
use App\Models\clientProjet;
use App\Models\clientProjets;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ClientProjetController extends Controller
{
    function insert_clientProjet(Request $request)
    {
        $request->validate([
            'prenom_client'  => 'required',
            'Nom_client'  => 'required',
            'tel'  => 'required',
            'montant' => 'required',
            'projet_id' => 'required'
        ]);


        $form_data = array(
            'prenom_client'  => $request->prenom_client,
            'Nom_client'  => $request->Nom_client,
            'montant'  => $request->montant,
            'tel' => $request->tel,
            'projet_id' => $request->projet_id
        );
        // redirect("posts/create");
        // projet::create($form_data);
        if(clientProjets::create($form_data)){
            $request->session()->flash("success","تم تسجيل رسالتك بنجاح");
        }
        else{
            $request->session()->flash("error   ","لم نستطع تسجيل رسالتك، المرجوا المحاولة من جديد!");
        }
        return redirect()->back();
    }
}
