<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Veuillez Verifier Votre Email et votre mot de passe";
        }
        else {
            $req->session()->put('user',$user);
            $req->session()->put('ok',TRUE);
            return redirect ('/');
        }
    }
    function register(Request $req )
    {
     //return $req->input();
     $user = new User;
     $user->name=$req->name;
     $user->email=$req->email;
     $user->password=Hash::make($req->password);
     $user->save();
     return redirect('/login');

    }
    function adminlogin () {
        return view ('adminlogin');
}
}