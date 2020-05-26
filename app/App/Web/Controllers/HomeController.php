<?php

namespace App\Web\Controllers;

use Support\Http\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
