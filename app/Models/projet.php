<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    protected $fillable = ['Nom_projet','description','Projet_image1','Projet_image2','Projet_image3','Projet_image4'];
    use HasFactory;
    public function attachements(){
        return $this->hasMany(attachement::class);
    }
}
