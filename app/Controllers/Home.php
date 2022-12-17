<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // echo "hello guys";
    }

    public function coba()
    {
        echo "Hello hello bro";
    }

    public function test()
    {
        echo "Hai ADICK ADICK";
    }
}
