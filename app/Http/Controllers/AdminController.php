<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Gasstation;

class AdminController extends Controller
{

    public function users()
    {
    	if(Auth::check()&&((Auth::user()->auth_level)>1)){

    		$users = User::all();
    		return view('admin.users', compact('users'));

    	} else {
    		return redirect()->home();
    	}
    }

    public function usersSearch(Request $request)
    {
        if(Auth::check()&&((Auth::user()->auth_level)>1)){

            $active = $request->input('active');
            $usersearch = $request->input('name');

            if(null !== $usersearch){

                $query = User::all()->where('name', 'like', $usersearch);

                if(null !== $active){

                    $query = $query->where('active', '=', $active);
                }

            } else if (null !== $active){

                $query = User::all()->where('active', '=', $active);

            } else {

                $query = User::all();
            }            

            $users = $query;

            return view('admin.users', compact('users'));

        } else {
            return redirect()->home();
        }
    }

    public function toggleActivity($id)
    {
        if(Auth::check()&&((Auth::user()->auth_level)>1)){

            $user = User::find($id);

            if($user->active === 1){
                $user->active = 0;
                $user->save();
            } else if($user->active === 0){
                $user->active = 1;
                $user->save();
            }

            return back();

        } else {
            return redirect()->home();
        }
    }
}