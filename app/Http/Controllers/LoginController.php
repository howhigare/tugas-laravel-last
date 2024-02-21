<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login/login',[
            'title' => "LOGIN"
        ]);
    }
    public function create()
    {
        //
    }
    public function authenticate(Request $request){
        $cred = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($cred)){
            $request->session()->regenerate();
            return redirect('/homeafter');
        }
        return back()->with('LoginErr','Username or Password are Incorrect,Try Again');
    }
    public function logout( ){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/home');
    }

}
