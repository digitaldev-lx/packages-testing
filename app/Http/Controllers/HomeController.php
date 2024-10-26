<?php

namespace App\Http\Controllers;
use DigitalDevLx\LogHole\Attributes\Loggable;
use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{
    #[Loggable('Método index da HomeController', 'debug')]
    public function index()
    {
        //Log::error('Método index da HomeController!');
        return "Hello World!";
    }
}
