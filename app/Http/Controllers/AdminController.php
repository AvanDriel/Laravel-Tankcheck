<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
    	if(Auth::check()&&((Auth::user()->auth_level)>1)){
    		return view('admin.index');
    	} else {
    		return redirect()->home();
    	}
    }
}
