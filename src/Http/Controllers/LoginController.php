<?php

namespace Artisan\Outline\Http\Controllers;

class LoginController extends Controller
{
    public function create()
    {
        return view('outline::login.create');
    }

    public function store()
    {
    }
}