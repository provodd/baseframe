<?php

namespace App\Controllers;

use Framework\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', ['message' => 'Добро пожаловать в ProvodLite!']);
    }

    public function about(): void
    {
        $this->render('home', ['message' => 'Добро пожаловать в about!']);
    }
}
