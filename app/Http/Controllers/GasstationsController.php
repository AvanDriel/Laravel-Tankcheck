<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gasstation;
use Auth;

class GasstationsController extends Controller
{
    public function index(){
    	$gasstations = Gasstation::all();
    	return view('gasstations.index', compact('gasstations'));
    }

    public function create(){
    	//Check if the user is logged in and is on the Auth level of an Admin
    	if(Auth::check()&&((Auth::user()->auth_level)>1)){
    		return view('gasstations.create');
    	} else {
    		return redirect()->home();
    	}
    }

     public function store(Request $request)
    {	//Check if the user is logged in and is on the Auth level of an Admin
    	if(Auth::check()&&((Auth::user()->auth_level)>1)){

	    	//validate form
	    	$this->validate(request(), [

	    		'name' => 'required',
	    		'adress' => 'required',
	    		'latitude' => 'required',
	    		'longitude' => 'required'
	    	]);

	    	//create
	    	//$gasstation = Gasstation::create(request(['name', 'adress', 'gasprice', 'latitude', 'longitude', 'currentuser', 'currentuser']));  
            $gasstation = Gasstation::create($request->all());  

	    	//redirect home
	    	return redirect('/add');

	    } else {
    		return redirect()->home();
    	}
    }
}
