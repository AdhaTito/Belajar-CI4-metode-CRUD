<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo "hello guys";
        echo "Ini Controller Coba method index";
    }

    public function coba()
    {
        echo "Hello hello aja";
    }

    public function test()
    {
        echo "Nama Saya $this->nama";
    }
}
