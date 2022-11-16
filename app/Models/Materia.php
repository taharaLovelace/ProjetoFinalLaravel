<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'mat_id'
    ];

    public function prof()
    {
        return $this->belongsTo(Prof::class,'mat_id','prof_mat');
    } 

    public function alunos()
    {
        return $this->hasMany(Alunos::class,'alu_mat','mat_id');
    } 

}

