<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    //Controlador para el login...
    public function index(): View
    {
        return view('login');
    }
}
