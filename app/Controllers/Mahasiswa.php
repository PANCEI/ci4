<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class  Mahasiswa extends BaseController
{
    protected $datamahasiswa;
    public function __construct()
    {
        $this->datamahasiswa = new MahasiswaModel();
    }

    public function index()
    {

        $data = $this->datamahasiswa->get();
        $datas = [
            "title" => "Data Mahasiswa",
            "mhs" => $data
        ];
        return view("mahasiswa/index", $datas);
    }
}
