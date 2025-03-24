<?php

namespace App\Controllers;

use Framework\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', ['message' => 'Добро пожаловать в baseframe!']);
    }
}
