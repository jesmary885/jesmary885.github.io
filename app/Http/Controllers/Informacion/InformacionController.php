<?php

namespace App\Http\Controllers\Informacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InformacionController extends Controller
{
    public function Sobremi(){
        return Inertia::render('Info/SobreMi');
    }

    public function Portafolio(){
        return Inertia::render('Info/Trabajos');
    }

    public function Contacto(){
        return Inertia::render('Info/Contacto');
    }
}
