<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class UserController extends Controller
{
    //
    function index()
    {
        return view('login');
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('companies');
        }
        else
        {
            return back()->with('error', 'Wrong login ');

        }
    }

    function successlogin()
    {
        return view('companies');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
