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

    //get file from db by id
    public function getFile($id){
        $pdo = DB::connection()->getPdo();
        $pdo->beginTransaction();

            $stmt = $pdo->prepare("SELECT id, file, extension "
                . "FROM attachements"
                . " WHERE id = :id");

        // query blob from the database
        $stmt->execute([$id]);
        $fileData = "";
        $ext = "";
        $stmt->bindColumn('file', $fileData, $pdo::PARAM_STR);
        $stmt->bindColumn('extension', $ext, $pdo::PARAM_STR);
        $stmt->fetch(\PDO::FETCH_BOUND);
        $stream = $pdo->pgsqlLOBOpen($fileData, 'r');

        // output the file
        header("Content-type: image/" . $ext);
        fpassthru($stream);
    }
    public function createFileName($file){
        $originName = $file->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;
        return $fileName;
    }



    public function insertFile($project_id,$file){

        $sql = "INSERT INTO attachements (size,extension,name,projet_id,file) "
            . "VALUES(:size,:extension,:name,:projet_id,:file)";
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
                ':projet_id' => $project_id,
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
        ]);
        $projet = new projet();
        $projet->Nom_projet = $request->get("Nom_projet");
        $projet->description = $request->get("description");
        $projet->save();
        if($request->hasFile('attachements')){
            foreach ($request->file('attachements') as $file){
                $this->insertFile($projet->id,$file);
            }
        }
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
