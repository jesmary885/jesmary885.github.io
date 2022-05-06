<?php

namespace App\Http\Controllers\Informacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class contactoController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'mensaje' => 'required'
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('jesmary885@gmail.com')->send($correo);
        return redirect()->route('home')->with('status','Mensaje enviado exitosamente');
    }
}
