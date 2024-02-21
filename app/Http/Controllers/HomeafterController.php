<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAfterController extends Controller
{
    public function index(){
        return view('homelogin',[
            'title' => 'Home'
        ]);
    }
}
