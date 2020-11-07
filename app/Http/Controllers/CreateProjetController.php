<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CreateProjetController extends Controller
{

    public function createFileName($file){
        $originName = $file->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;
        return $fileName;
    }



    public function insertFile($post_id,$file,$table){

        $sql = "INSERT INTO ".$table."(size,extension,name,post_id,file) "
            . "VALUES(:size,:extension,:name,:post_id,:file)";
        $pdo = DB::connection()->getPdo();
        try {
            $pdo->beginTransaction();
            $pathToFile = $file->getRealPath();
            // create large object
            $fileData = $pdo->pgsqlLOBCreate();
            $stream = $pdo->pgsqlLOBOpen($fileData, 'w');

            // read data from the file and copy the the stream
            $fh = fopen($pathToFile, 'rb');
            stream_copy_to_stream($fh, $stream);
            //
            $fh = null;
            $stream = null;

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':size' => $file->getSize(),
                ':extension' => $file->getClientOriginalExtension(),
                ':name' =>  $this->createFileName($file),
                ':projet_id' => $post_id,
                ':file'=>$fileData
            ]);

            // commit the transactions
            $pdo->commit();
        } catch (\Exception $e) {
            $pdo->rollBack();
            throw $e;
        }

        //
    }
    function insert_image(Request $request)
    {
        $request->validate([
            'Nom_projet'  => 'required',
            'description' => 'required',
            'Projet_image1' => 'required|image|max:2048',
            'Projet_image2' => 'required|image|max:2048',
            'Projet_image3' => 'required|image|max:2048',
            'Projet_image4' => 'required|image|max:2048'
        ]);
        $projet = new projet();
        $projet->Nom_projet = $request->get("Nom_projet");
        $projet->description = $request->get("description");
        $projet->save();
        $image_file1 = $request->Projet_image1;
        $image_file2 = $request->Projet_image2;
        $image_file3 = $request->Projet_image3;
        $image_file4 = $request->Projet_image4;
        $this->insertFile($projet->id,$image_file1,'attachements');
        $this->insertFile($projet->id,$image_file2,'attachements');
        $this->insertFile($projet->id,$image_file3,'attachements');
        $this->insertFile($projet->id,$image_file4,'attachements');
        /* $image1 = Image::make($image_file1);
         $image2 = Image::make($image_file2);
         $image3 = Image::make($image_file3);
         $image4 = Image::make($image_file4);

         Response::make($image1->encode('jpeg'));
         Response::make($image2->encode('jpeg'));
         Response::make($image3->encode('jpeg'));
         Response::make($image4->encode('jpeg'));

         $form_data = array(
             'Nom_projet'  => $request->Nom_projet,
             'description' => $request->description,
             'Projet_image1' => $image1,
             'Projet_image2' => $image2,
             'Projet_image3' => $image3,
             'Projet_image4' => $image4
         );*/
       // redirect("posts/create");
       // projet::create($form_data);
  /*      if(projet::create($form_data)){
            $request->session()->flash("success","تم تسجيل رسالتك بنجاح");
        }
        else{
            $request->session()->flash("error   ","لم نستطع تسجيل رسالتك، المرجوا المحاولة من جديد!");
        }*/
        return redirect()->back();
    }
    function index()
    {
        $data = projet::latest()->paginate(5);
        return view('admin.projetShow', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    function indextest()
    {
        $data = projet::latest()->paginate(5);
        return view('admin', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    function indexGallery()
    {
        $data = projet::latest()->paginate(10);
        return view('gallery', compact('data'))
            ->with('i',(request()->input('page', 1) - 1) * 10);
    }

    function fetch_image($image_id)
    {
        $projet = projet::findOrFail($image_id);
       // $image_file = Image::make($projet->Projet_image1);

//        $response = Response::make($image_file->encode('jpg'));

  //      $response->header('Content-Type', 'image/jpeg');
        return  view('modal')->with('projet',$projet);
    }
    //
    public function  chercher(Request $request){
        $type = $request->get('Cherche');
        $motif = $request->get('motif');
        if($type == 'projet'){
            $data = DB::table('projets')
                ->where('projets.Nom_projet','like','%'.$motif.'%')
                ->select('projets.*')
                ->distinct('projets.id')->paginate(9,['projets.*']);
        }
        if($type == 'client'){
            $data = DB::table('projets')
                ->where('projets.Nom_client','like','%'.$motif.'%')
                ->select('projets.*')
                ->distinct('projets.id')->paginate(5,['projets.*']);
        }
        return view('admin.projetShow')->with([
            'data'=>$data,
        ]);
    }

}
