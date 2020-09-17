<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller{  
    
    function store(Request $request){
        $user = new User();
                
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        Auth::attempt(['email' => $user->email,'password' => $user->password]);
        return redirect('/pizzas');
    }
   
    function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email,'password' => $password])) {
            return redirect('/pizzas');
        } else {
            return redirect('/login?erro=1');
        }
    }

    function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    function loginView(){
        return view('/login');
    }

}
