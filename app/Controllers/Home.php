<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('Layouts/front');
        return view('Pages/Landing/index');
    }
}
