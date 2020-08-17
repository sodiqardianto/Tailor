<?php

namespace App\Controllers;

class Barang extends BaseController
{

    public function barangMasuk()
    {
        $data = [
            'title' => 'Barang Masuk'
        ];

        return view('barang/barang_masuk', $data);
    }


    //--------------------------------------------------------------------

}
