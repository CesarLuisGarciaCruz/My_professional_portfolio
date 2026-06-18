<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $proyectos = [
            [
                'titulo' => 'E-Commerce Prueba',
                'descripcion' => 'Plataforma de comercio electrónico enfocada en abarrotes',
                'imagen' => 'img\stiendita.jpeg',
                'url' => 'http://127.0.0.1:8000/login',
                'tecnologias' => ['Laravel', ' PHP', 'MySQL', ' HTML/CSS',]
            ],
            [
                'titulo' => 'Restaurante',
                'descripcion' => 'Muestra de una página de menu para un restaurante',
                'imagen' => 'img/ajolote.png',
                'url' => 'http://127.0.0.1:8000/restaurant',
                'tecnologias' => ['Laravel', 'React', 'Bootstrap', 'MySQL',]
            ],
            // Proyectos aqui...
        ];
        
        
        return view('index', compact('proyectos'));
        
    }
}