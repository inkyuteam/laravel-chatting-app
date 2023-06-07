<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect("/");
    }
}
