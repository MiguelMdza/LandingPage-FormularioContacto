<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($codigo = null)
    {
        if($codigo == '1234'){
            $nombre = "Miguel";
            $correo = "miguel.mendoza@gmail.com";
            $comentario = "¿Por dónde puedo enviarles mi CV para ver si puedo trabajar con ustedes?";
        } else{
            $nombre = null;
            $correo = null;
            $comentario = null;
        }
    
        return view('contacto', compact('codigo', 'nombre', 'correo', 'comentario'));
    }

    public function recibeFormContacto(Request $request)
    {
        //recibir info
            //$request->

        //validación
        $request->validate([
            'nombre' => 'required|max:100|min:3',
            'correo' => ['required', 'email'],
            'comentario' => 'required|min:3',
        ]);
        //insertar a DB
        //redirigir        
    }

    public function landingpage()
    {
        return view('landingpage');
    }

}
