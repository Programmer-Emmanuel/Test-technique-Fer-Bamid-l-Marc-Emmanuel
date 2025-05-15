<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Listener;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function accueil(){
        return view('accueil');
    }

    public function create(){
        return view("inscription");
    }
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect('/');
    }

    public function loginView(){
        return view("login");
    }

    public function loginPost(Request $request){
        $user = User::where("email", $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            Auth::login($user);
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
