<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonatController extends Controller
{
   public function index()
   {
    return view('donat.index');
   }
}
