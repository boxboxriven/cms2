<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        try {
            $user = $this->auth->signInWithEmailAndPassword($email, $password);
            // L'utilisateur est authentifié avec succès
        } catch (\Exception $e) {
            // Une erreur s'est produite lors de l'authentification
        }
    }

}
