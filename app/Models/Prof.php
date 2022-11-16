<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'RP',
        'prof_mat'
    ];

    public function materia(){

    return $this->hasOne(Materia::class, 'mat_id','prof_mat');
    }

}

