<?php

namespace App\Controllers;

use App\Models\PenjualanModel;

class Penjualan extends BaseController
{
    protected $penjualanModel;

    public function __construct()
    {
        $this->penjualanModel = new PenjualanModel();
    }

    public function index()
    {
        // Untuk Pagination
        $currentPage = $this->request->getVar('page_penjualan') ? $this->request->getVar('page_penjualan') : 1;
        // Keyword Pencarian
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $penjualan = $this->penjualanModel->search($keyword);
        } else {
            $penjualan = $this->penjualanModel;
        }

        $data = [
            'title' => 'Daftar Penjualan',
            // 'penjualan' => $this->penjualanModel->findAll()
            'penjualan' => $penjualan->paginate(5, 'penjualan'),
            'pager'     => $this->penjualanModel->pager,
            'currentPage' => $currentPage
        ];

        return view('penjualan/index', $data);
    }

    public function tambah()
    {
        // session();/
        $data = [
            'title' => 'Form Tambah Data Penjualan',
            'validation' => \Config\Services::validation()
        ];
        return view('penjualan/tambah', $data);
    }
    public function save()
    {
        // Validasi input
        if (!$this->validate([
            'customer' => [
                'rules' => 'required[penjualan.customer]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                ]
            ]
        ])) {
            return redirect()->to('/penjualan/tambah')->withInput();
        }
        $this->penjualanModel->save([
            'customer' => $this->request->getVar('customer'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'unit' => $this->request->getVar('unit'),
            'tgl_beli' => $this->request->getVar('tgl_beli'),
            'total_harga' => $this->request->getVar('total_harga')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/penjualan');
    }
}
