<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachement extends Model
{
    use HasFactory;
    public function project(){
       return $this->belongsTo(projet::class);
    }
}
