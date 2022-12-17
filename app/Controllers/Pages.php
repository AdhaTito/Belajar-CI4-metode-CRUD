<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebTito'
        ];

        return view('pages/index', $data);

    }

    public function about()
    {
        $data = [
            'title' => 'About | webTito'
        ];

        return view('pages/about', $data);

    }
}
