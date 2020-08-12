<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('dashboard', $data);
    }

    public function barangMasuk()
    {
        $data = [
            'title' => 'Barang Masuk'
        ];

        return view('barang/barang_masuk', $data);
    }

    public function daftarHarga()
    {
        $data = [
            'title' => 'Daftar Harga'
        ];

        return view('daftar/daftar_harga', $data);
    }

    public function daftarPekerja()
    {
        $data = [
            'title' => 'Daftar Pekerja'
        ];

        return view('daftar/daftar_pekerja', $data);
    }

    public function daftarSeller()
    {
        $data = [
            'title' => 'Daftar Seller'
        ];

        return view('daftar/daftar_seller', $data);
    }

    //--------------------------------------------------------------------

}
