<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use registers;

class RegisterUserController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest', ['except' => 'logout']);
    // }
    protected function redirectTo()
    {
        return '/home';
    }
    //Show registration form
    public function ShowRegisterForm()
    {
        return view('registration');
    }








        //-----show login form-----
    public function ShowLoginForm()
    {
        return view('login');
    }


    use AuthenticatesUsers;
    //------validating user login--------
    public function ValidLogin(request $request)
    {   
        $this->validate($request, [        
            'email' => 'required',
            'password' => 'required'
            ]);   
             
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            
            //return 'login succesfully'; 
            return redirect()->route('extraDetail',$request->id);
            // return redirect()->intended('userlogin');
            //return 'login succesfully';
        }
        else{
            return "Some problem occured";
        }
    }


    
}
