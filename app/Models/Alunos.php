<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'RA',
        'alu_mat',
        'filmes'
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class,'alu_mat','mat_id');
    }
}
