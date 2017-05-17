<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;

use Response;
use Redirect;
use Uuid;
use Session;
use DB;

class AuthController extends Controller
{
    public function login()
    {
    	if(Auth::user())
    		return redirect('/dashboard');

    	return view('auth.login');
    }

    public function register()
    {
    	return view('auth.register');
    }


    public function doRegister(Request $request)
    {

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function doLogin(Request $request)
    {
    	$messagesError = [ 
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            ];

        $validator = Validator::make($request->all(), [ 
                'email' => 'required',
                'password' => 'required',
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to('/login')
                ->withErrors($validator)->withInput();
        }

    	if(Auth::attempt(['email_pengguna' => $request->email , 'password' => $request->password])){
            return redirect('/dashboard');
        }
        return redirect()->back()->withErrors('Email atau Password salah');
    }

    public function doRegister(Request $request)
    {
    	$messagesError = [ 
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            ];
            
    	$validator = Validator::make($request->all(), [ 
                'email' => 'required',
                'password' => 'required',
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to('/register')
                ->withErrors($validator)->withInput();
        }

    	$pengguna = new Pengguna;
    	$pengguna->email = $request->email;
    	$pengguna->password_pengguna = bcrypt($request->password);

        $pengguna->save();

        return redirect('/login')->with('success','Anda berhasil mendaftarkan diri.');    	
    }
}
