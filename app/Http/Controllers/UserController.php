<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

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
$admin = DB::table('users')
        ->select('email')
        ->where('email', '=', $req->email)
        ->count();
if($admin==0){
    $user->password=Hash::make($req->password);
    $user->save();
    return redirect('/login');
}
else{
echo  "Cette adresse email est déja existante. Si vous avez déja un compte vous pouver vous " ?> <a href="http://localhost/cms2/public/login">connecter ici </a> <?php
}
        }
    }
    
?>