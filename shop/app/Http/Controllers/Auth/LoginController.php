<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){

        return view('auth.login');

    }
    public function store(Request $request){

        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email',
        ]);
        if (!auth()->attempt($request->only('email','password'))){
            return back()->with('status','Invalid login details');
        }

        return redirect()->route('dashboard');

    }
}
