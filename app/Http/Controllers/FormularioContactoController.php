<?php

namespace App\Http\Controllers;

use App\Mail\MensajeEnviado;
use Illuminate\Support\Facades\Mail;

class FormularioContactoController extends Controller
{
    public function addDatos(){

       $mensaje = request();
       $mensaje->validate([
            'nombre'=>'required',
            'email'=>'required|email',
            'asunto'=>'required',
            'comentarios'=>'required|min:3',
        ]);

        //enviar email
        // Mail::to('oliver.charry.216@unisabaneta.edu.co')->queue(new MensajeEnviado($mensaje));
        // return new MensajeEnviado($mensaje);
        return back()->with('status','Correo Enviado');
    }
}
