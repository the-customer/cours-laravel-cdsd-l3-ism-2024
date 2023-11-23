<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    // public function connexion(Request $request)
    // {
    //     $request->validate(
    //   [
    //         // "email" => ["required","email"],
    //             "email" => "required|email",
    //             "mdp"   => "required|min:6|max:25"
    //         ],
    // [
    //             "email.required"    => "L'email est requis!",
    //             "email.email"    => "L'email est invalide!!!",
    //             "mdp.required"  => "Le mot de passe est requis",
    //             "mdp.min"  => "Le mot de passe doit avoir au min 6 caracteres",
    //             "mdp.max"  => "Le mot de passe doit avoir au max 25 caracteres",
    //         ]
    // );
    //    dd($request->all());
    // }
    public function connexion(AuthRequest $request)
    {
       dd($request->all());
    }
}
