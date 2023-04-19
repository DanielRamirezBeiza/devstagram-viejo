<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }


    public function store(Request $request) {


        //Validacion
        $this->validate($request,[
            'name'=>'required|min:3',
            'username'=>'required|max:30|unique:users',
            'email'=>'required|min:3|unique:users|email|max:60',
            'password'=>'required|min:3',
            'password_confirmation'=>'required|min:3'


        ]); 
    }
}