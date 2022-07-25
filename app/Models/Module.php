<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function chapitres(){
        return $this->hasMany(Chapitre::class);
    }

    public function formation(){
        return $this->belongsTo(Formation::class);
        
    }
}
