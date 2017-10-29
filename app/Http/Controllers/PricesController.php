<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gasstation;
use Auth;

class PricesController extends Controller
{
    public function approve($id)
    { 
        if(Auth::check()) {

            $approveduser = User::find($id);
            $oldscore = ($approveduser->prices_approved);
            $approveduser->prices_approved = ($oldscore +1);
            $approveduser->save();

            $currentuser = Auth::user();
            $oldchecked = ($currentuser->prices_checked);
            $currentuser->prices_checked = ($oldchecked +1);

            if(($oldchecked+1)>9){
                $currentuser->auth_level = 1;
            }

            $currentuser-> save();

            return redirect('/thanks');
        }else{
            return redirect()->home();
        }
    }

    public function correct($id)
    {
        if(Auth::check()) {
    	   return view('gasstations.correct')->with('id', $id);
        }else{
            return redirect()->home();
        }
    }

    public function update(Request $request)
    { 
        if(Auth::check()) {
        	$this->validate(request(), [

    	    		'gasprice' => 'required',
    	    		'station_id' => 'required'
    	    	]);

            $currentuser = Auth::user();
        	$id = $request->input('station_id');

        	Gasstation::where('id', $id)->update(
                ['user_id' => $currentuser->id], 
                ['gasprice' => request(['gasprice'])
            ]);

            $oldchecked = ($currentuser->prices_checked);
            $currentuser->prices_checked = ($oldchecked +1);

            if(($oldchecked+1)>9){
                $currentuser->auth_level = 1;
            }

            $currentuser-> save();

            return redirect('/thanks');
            
        }else{
            return redirect()->home();
        }
    }

    public function thanks()
    {
    	return view('gasstations.thanks');
    }
}
