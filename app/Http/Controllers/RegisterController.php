<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DragonCode\Support\Facades\Helpers\Str;

class RegisterController extends Controller
{
    public function index()
     {
        return view('auth.register');
    }

public function store(Request $request)
    {
        //Imprimir variables
        // Imprimir una variable especifica($request->get('username'));
    


        //modificar un request como ultimo recurso
        $request->request->add(['username'=>Str::slug($request->username)]);


        //Validación
        $this->validate($request, [
            'name'=> 'required|min:3',
            'username'=> 'required|min:7',
            'email'=> 'required|unique:users|email|min:5|max:30',
            'password'=> 'required|confirmed|min:6'
        
        ]);
        
        User::create([
            'name'=>$request->name,
            //'username'=>Str::slug($request->username),
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //autenticar un usuario para iniciar sesión
        auth()->attempt([
           'email'=> $request->email,
           'password'=>$request->password,
        ]);


        //otra forma de autenticar
        //auth()->attempt($request->only('email', 'passowrd'));

        return redirect()->route('post.index');
    }

}


