<?php

namespace App\Controllers;

use App\Kernel\View\View;

class PoliseController
{
    public function index(): void
    {
        $view = new View();

        $view->page('polise');
    }
}