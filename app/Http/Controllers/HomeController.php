<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function index()
    {
        return view('welcome');
    }
    public function user()
    {
    if(Auth::check()){
    $User = Auth::user();
    return response()->json($User, 200);
    }

}

}
