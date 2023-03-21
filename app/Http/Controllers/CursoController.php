<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Página principal de los cursos";
    }

    public function create()
    {
        return "En esta página se crean cursos";
    }

    public function show($curso, $categoria = null)
    {
        if ($categoria) {
            return "Bienvenidos al curso de $curso de $categoria";
        } else {
            return "Bienvenido al curso $curso";
        }
    }
}
