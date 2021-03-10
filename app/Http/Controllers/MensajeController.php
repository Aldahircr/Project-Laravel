<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
   public function Store()
   {
     $message = request()->validate([ //automaticamente regresa a la pantalla  del formulario si falla la validacion, envia errores de usuarios
        'name' => 'required', //atributo name del nombre del campo
        'email' => 'required|email',
        'subject' =>  'required',
        'content' =>  'required'

    ]);

      //Enviar Email


      Mail::to('chavez.romero1223@gmail.com')->queue(new MessageReceived($message));//email, metodo TO(para), enviar email

      //return new MessageReceived($message);
      return 'Mensaje enviado';
   }
}
