<?php

namespace app\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{

    protected $table = "mahasiswa";
    protected $primaryKey = "id_mahasiswa";
    public function get()
    {
        return $this->findAll();
    }
}
