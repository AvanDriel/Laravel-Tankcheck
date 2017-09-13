<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GasstationsController extends Controller
{
    
    public function index()

    {

    	return view('gasstations.index');

    }
}
