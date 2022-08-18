<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user_data = auth()->user()->post;


        return view('dashboard',compact('user_data'));
    }
    //
}
