<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datas = [
            "title" => "Home"
        ];
        return view('home/index', $datas);
    }
    public function cek()
    {
    }
}
