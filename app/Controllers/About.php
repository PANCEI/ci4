<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $datas = [
            "title" => "About"
        ];
        return view("About/About", $datas);
    }
}
