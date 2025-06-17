<?php

namespace App\Controllers;

class Solutions extends BaseController
{
    public function index()
    {
        return view('solutions/index');
    }

    public function enterprise()
    {
        return view('solutions/enterprise');
    }

    public function individual()
    {
        return view('solutions/individual');
    }

    public function industry()
    {
        return view('solutions/industry');
    }
}
