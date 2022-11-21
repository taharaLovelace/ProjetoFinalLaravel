<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alunos extends Model
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'alunos';


    protected $fillable = [
            'nome',
            'cpf',
            'endereco',
            'filme',
            'email',
            'password'
    ];

    protected $hidden = 'password';
}
