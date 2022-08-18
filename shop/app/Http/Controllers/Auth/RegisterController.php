<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:60',
            'password' => 'required|max:100|min:4|confirmed',
            'email' => 'required|email|max:255',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

//        auth()->attempt($request->only('email','password'));
        auth()->login($user);

        return redirect()->route('home');
    }
}
