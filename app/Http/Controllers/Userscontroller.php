<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users;
use App\User;

class Userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view ("admin.users", ['usuarios' => $usuarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.nuevo_usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            "name" => "required | string | max:255",
            "email" => "required | string | email | max:255 | unique:users",
            "password" => "required | string | min:8 | confirmed",

        ];
        $mensajes = [
            "required" => "Debe ingresar :attribute de la noticia.",
        ];

        $this->validate($request, $reglas, $mensajes);

        $user = new Users();

        $user->name = $request["name"];
        $user->email = $request["email"];
        $user->password =  Hash::make($request['password']);

        $user->save();
        return redirect('/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $formulario)
    {
        $id = $formulario['id'];
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
