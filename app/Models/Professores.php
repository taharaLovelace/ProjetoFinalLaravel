<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professores extends Model
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'professores';

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'email',
        'password'
    ];

    protected $hidden = 'password';
}
