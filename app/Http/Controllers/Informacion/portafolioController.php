<?php

namespace App\Http\Controllers\Informacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class portafolioController extends Controller
{
    public function Ventas(){
        return Inertia::render('Proyectos/Ventas');
    }
    public function Blog(){
        return Inertia::render('Proyectos/Blog');
    }
    public function Ecommerce(){
        return Inertia::render('Proyectos/Ecommerce');
    }
    public function Negocios(){
        return Inertia::render('Proyectos/Negocios');
    }
    public function ActOperacional(){
        return Inertia::render('Proyectos/ActOperacional');
    }
}
