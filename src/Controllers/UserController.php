<?php

namespace App\Controllers;

use App\Kernel\View\View;

class UserController
{

    public function index():void
    {
        $view = new View();

        $view->page('register');
    }
}