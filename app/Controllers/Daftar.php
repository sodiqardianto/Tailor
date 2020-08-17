<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function tambahHarga()
    {
        $data = [
            'title' => 'Tambah Data'
        ];

        return view('daftar/tambah_harga', $data);
    }

    public function simpan()
    {
        $this->Mdl_daftarHarga->save([
            'kode' => $this->request->getVar('kode'),
            'jenis' => $this->request->getVar('jenis'),
            'model' => $this->request->getVar('model'),
            'hargaKaryawan' => $this->request->getVar('hargaKaryawan'),
            'hargaJual' => $this->request->getVar('hargaJual')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/daftar/daftarHarga');
    }

    public function daftarHarga()
    {
        $harga = $this->Mdl_daftarHarga->findAll();

        $data = [
            'title' => 'Daftar Harga',
            'harga' => $harga
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
}
