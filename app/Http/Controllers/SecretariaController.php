<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class SecretariaController extends Controller
{
    public function index()
    {
        $user = Auth::user()->role;
        if ($user == '1'){
            return view('secretaria.dashboard');
        }else{
            return view('welcome');
        };
    }

    public function registro()
    {
        $user = Auth::user()->role;
        if ($user == '1'){
            return view('auth.register');
        }else{
            return view('welcome');
        };
    }

    public function joinCurso($id) {
        $user = auth()->user();
        $user->cursos()->attach($id);
        $event = Event::findOrFail($id);
        return redirect('/dashboard');
    }
}
