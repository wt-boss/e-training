<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{   
    protected $guarded = [];
    use HasFactory;
    public function chapitre(){
        $this->belongsTo(Chapitre::class);
    }
}
