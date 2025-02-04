<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadHomePage(){
        $logged_user = Auth::user();
        return view('user.home-page',compact('logged_user'));
    }

    public function loadProfile() {
        $logged_user = Auth::user();
        return view('user.profile',compact('logged_user'));
    }
}
