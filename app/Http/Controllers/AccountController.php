<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
     public function index(){

    	if(Auth::check()){

    		$user = Auth::user();
    		return view('account.index', compact('user'));
    		
    	} else {
    		return redirect()->home();
    	}
    }
}
