<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PagesController extends Controller
{
    public function welcome(){
        $usuarios = User::all();
        return view('auth.login', compact('usuarios'));
    }
    public function about(){
        return view('about');
    }
}
