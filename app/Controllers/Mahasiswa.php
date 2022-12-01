<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use Config\Services;

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
    public function create()
    {
        $datas = [
            "title" => "Tambah Mahasiswa",

        ];
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("mahasiswa/tambah", $datas);
        }

        $rules = [
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Tidak Boelh Kosong.',
                ],
            ],
            'nim' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nim Tidak Boleh Kosong.',
                ],
            ]
        ];

        if (!$this->validate($rules)) {
            $datas += [
                "validasi" => \Config\Services::validation()
            ];
            return view("mahasiswa/tambah", $datas);
        } else {
            $datas = [
                "nama" => $this->request->getVar()['nama'],
                "nim" => $this->request->getVar()['nim']
            ];
            session()->setFlashdata("success", "Mahasiswa Baru Berhasil Di Tambahkan");
            $this->datamahasiswa->save($datas);
            return redirect()->to("/mahasiswa");
        }
        // return view("mahasiswa/tambah", $datas);
    }
    // public function save()
    // {
    //     // $rules = [
    //     //     'nama' => [
    //     //         'rules'  => 'required',
    //     //         'errors' => [
    //     //             'required' => 'You must choose a Username.',
    //     //         ],
    //     //     ],
    //     //     'nim' => [
    //     //         'rules'  => 'required',
    //     //         'errors' => [
    //     //             'required' => 'You must choose a Username.',
    //     //         ],
    //     //     ]
    //     // ];

    //     // if (!$this->validate($rules)) {
    //     //     return redirect()->to("mahasiswa/create")->withInput();
    //     // }
    //     $datas = [
    //         "nama" => $this->request->getVar()['nama'],
    //         "nim" => $this->request->getVar()['nim']
    //     ];
    //     session()->setFlashdata("success", "Mahasiswa Baru Berhasil Di Tambahkan");
    //     $this->datamahasiswa->save($datas);
    // }
    // public function getdata()
    // {
    //     $data = $this->datamahasiswa->get();
    //     return $data;
    // }
    public function edit($id_mahasiswa)
    {
        $datas = [
            "title" => "Edit Mahasiswa",
            "mhs" => $this->datamahasiswa->single($id_mahasiswa)
        ];
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("mahasiswa/Edit", $datas);
        }

        $rules = [
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Tidak Boelh Kosong.',
                ],
            ],
            'nim' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nim Tidak Boleh Kosong.',
                ],
            ]
        ];

        if (!$this->validate($rules)) {
            $datas += [
                "validasi" => \Config\Services::validation()
            ];
            return view("mahasiswa/Edit", $datas);
        } else {
            $datas = [
                "id_mahasiswa" => $id_mahasiswa,
                "nama" => $this->request->getVar()['nama'],
                "nim" => $this->request->getVar()['nim']
            ];
            session()->setFlashdata("success", "Mahasiswa Berhasil Di Edit");
            $this->datamahasiswa->save($datas);
            return redirect()->to("/mahasiswa");
        }
    }
    public function delete()
    {
        $id = $this->request->getVar()['id'];
        $this->datamahasiswa->delete($id);
        session()->setFlashdata("success", "Mahasiswa Berhasil Di $id");
    }
}
