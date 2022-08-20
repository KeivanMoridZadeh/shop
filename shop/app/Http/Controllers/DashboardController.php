<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Like;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $user_data = auth()->user()->post()->with('user','likes')->paginate(15);



        return view('dashboard',compact('user_data'));
    }

    //
}
