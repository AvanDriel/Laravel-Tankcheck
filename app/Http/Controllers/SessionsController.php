<?php

namespace App\Http\Controllers;

use App\User;

class SessionsController extends Controller
{

	public function __construct()
	{

		$this->middleware('guest', ['except' => 'destroy']);

	}

    public function create()
    {

    	return view('sessions.create');

    }

    public function store()
    {
 
    	if (auth()->attempt(request(['email', 'password']))) {

            return redirect()->home();

    	} else {

        return back()->withErrors([

                'message' => 'Try again'

            ]);

        }

    }

    public function destroy()
    {

    	auth()->logout();


    	return redirect()->home();

    }

}
