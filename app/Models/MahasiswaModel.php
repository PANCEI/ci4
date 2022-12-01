<?php

namespace app\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{

    protected $allowedFields = ['nama', 'nim'];

    protected $useTimestamps = true;
    protected $createdField  = 'mahasiswa_created_at';
    protected $updatedField  = 'mahasiswa_updated_at';
    protected $table = "mahasiswa";
    protected $primaryKey = "id_mahasiswa";
    public function get()
    {
        return $this->orderBy($this->primaryKey, 'DESC')->findAll();
    }
    public function single($id)
    {
        return $this->where([$this->primaryKey => $id])->first();
    }
}
