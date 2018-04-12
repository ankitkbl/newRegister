<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\ExtraDetail;
use Auth;
class ExtraDetailController extends Controller
{
    //

    protected function ShowExtraForm()
    {
        return view('extraDetail');
    }

    
    protected function validExtraForm(Request $request)
    {
        $this->validate($request,[
            'mobile'=>'required',
            'state'=>'required',
            'country'=>'required'

        ]);

        $extraDetail= Auth::user();
        
        $extraDetail->mobile=$request->input('mobile');
        $extraDetail->state=$request->input('state');
        $extraDetail->country=$request->input('country');
        $extraDetail->save();
        return "All Fields Updated";
    }
}
