<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gasstation;

class GasstationsController extends Controller
{

    public function index(){
    	$gasstations = Gasstation::all();
    	return view('gasstations.index', compact('gasstations'));
    }
}
