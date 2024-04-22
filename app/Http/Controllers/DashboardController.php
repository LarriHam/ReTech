<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();

        if($user->hasRole('admin')){
            return view('admin.dashboard');
            
        }
        if($user->hasRole('ordinary_user')){
            return view('ordinary_user.dashboard');
        }
        else {
            return view('dashboard');
        }

    }
}

//finds out what kind of user you are and directs you to your dashboard depending on who you are
