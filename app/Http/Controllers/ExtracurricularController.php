<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
   public function index2()
   {
    return view ('extracurricular',[        
        "tittle" => 'ekstra',
        "extracurricular" => Extracurricular::all()

    ]);
   }
}
