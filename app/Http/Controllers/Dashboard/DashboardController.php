<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if (Auth::user()->role == 'principal'){
            return view('dashboard.principal');
        }
        if (Auth::user()->role == 'teacher'){
            return view('dashboard.teacher');
        }
        if (Auth::user()->role == 'student'){
            return view('dashboard.student');
        }
        if (Auth::user()->role == 'admin'){
            return view('dashboard.admin');
        }
        abort(404);

    }
    public function logout(){
        Auth::logout();
        return redirect(route('home'));
}
}
