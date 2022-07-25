<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{   
    protected $guarded = [];
    use HasFactory;
    public function modules(){
        return $this->hasMany(Module::class);
    }
}
