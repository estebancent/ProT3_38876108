<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('id_perfil') != 1) {
            return redirect()->to('/login')->with('error', 'Acceso no autorizado.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
     //..
    }
}