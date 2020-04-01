<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;


class Usercontroller extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        return view ("admin.users", ['usuarios' => $usuarios]);

    }


    public function create()
    {
        return view('auth.nuevo_usuario');
    }


    public function store(Request $request)
    {
        $reglas = [
            "name" => "required | string | max:255",
            "email" => "required | email | unique:users,email",
            "password" => "required | string | min:8 | confirmed",

        ];
        $mensajes = [
            "required" => "Debe ingresar :attribute.",
            "unique" => "Ese email ya existe.",
        ];

        $this->validate($request, $reglas, $mensajes);

        $user = new User();

        $user->name = $request["name"];
        $user->email = $request["email"];
        $user->password =  Hash::make($request['password']);

        $user->save();
        return redirect('admin/users');

    }


    public function edit($id)
    {
        $date = Carbon::now();
        $usuario = User::find($id);
        return view ("auth.edit_user", ['user' => $usuario, 'date' => $date]);
    }


    public function update(Request $request, $id)
    {
        $reglas = [
            "name" => "required | string | max:255",
            "password" => "confirmed",

        ];
        $mensajes = [
            "required" => "Debe ingresar :attribute.",
            "confirmed" => "El :attribute debe coincidir.",
        ];
        $this->validate($request, $reglas, $mensajes);

        $usuario = User::find($id);
        $diff = array_diff($request->toArray(), $usuario->toArray());

        if ($request->has('password')) {
            $password =  Hash::make($request['password']);
            $diff["password"] = $password;
        }
        // if ( $request->admin ) {
        //     $usuario->rol = true;
        // }

        $usuario->update([$diff, $usuario->rol]);
        return redirect()->route('admin.users')->with('mensaje', 'Usuario: ' .$usuario->name. ' actualizado');
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
        return redirect()->route('admin.users')->with('mensaje', 'Usuario eliminado');
    }
}