<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        $data['titulo'] = 'Tienda GuitarCent';
        return view('plantillas/head', $data).view('plantillas/nav').view('principal').view('plantillas/footer');
    }
    public function quieneSomos(){
        $data['titulo'] = 'Quienes Somos';
        return view('plantillas/head', $data).view('plantillas/nav').view('contenido/quienesSomos').view('plantillas/footer');
    }
    public function acerca_de(){
        $data['titulo'] = 'Nosotros';
        return view('plantillas/head', $data).view('plantillas/nav').view('contenido/acercaDe').view('plantillas/footer');
    }
    public function login(){
        $data['titulo'] = 'Tienda GuitarCent';
        return view('plantillas/head', $data).view('plantillas/nav').view('contenido/login').view('plantillas/footer');
    }
    public function registrarse(){
        $data['titulo'] = 'Registrate';
        return view('plantillas/head', $data).view('plantillas/nav').view('contenido/registrarte').view('plantillas/footer');
    }
}
