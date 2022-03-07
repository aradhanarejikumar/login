<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function home(){
        return view('home');
    }
    public function register(){
        if(Auth::user()){
            return redirect(route('dashboard.dashboard'));
        }
        return view('register');
    }
    public function reg(Request $request){
        $user =new User();
        $user->name=$request->name; 
        $user->email=$request->email;
        $user->role=$request->role;
       $user->password= Hash::make($request->password);
       $user->save();
        return view('register');
}
public function login(){
    if(Auth::user()){
        return redirect(route('dashboard.dashboard'));
    }
    return view('login');
}
public function submithome(Request $request){
    $credential = $request->only('email','password');
    if(Auth::attempt($credential)){
        return redirect(route('dashboard.dashboard'));
    }
    abort(404);
}
}
