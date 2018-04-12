<?php

namespace App\Http\Controllers;
use App\RegisterUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
//use RegisterUser;

class ValideUserController extends Controller
{
    //validating users

    protected function ValidUser(Request $request)
    {
       
        
        $this->Validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $RegisterUser = new RegisterUser();
        $RegisterUser->name = $request->input('name');
        $RegisterUser->email = $request->input('email');
        $RegisterUser->password = bcrypt($request->input('password'));
        $RegisterUser->save();

        return redirect()->to('loginForm');
    }


    

}
