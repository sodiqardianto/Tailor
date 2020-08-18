<?php

namespace App\Models;

use CodeIgniter\Model;

class Mdl_daftarHarga extends Model
{
    protected $table = 'tbl_daftarharga';
    protected $primaryKey = 'id_daftarHarga';
    protected $allowedFields = ['kode', 'jenis', 'model', 'hargaKaryawan', 'hargaJual'];

    public function getHarga($id = false)
    {
        if ($id = false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
