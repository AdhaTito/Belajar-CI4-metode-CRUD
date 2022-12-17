<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo "hello guys";
        echo "Ini Controller User didalam folder admin method index";
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
