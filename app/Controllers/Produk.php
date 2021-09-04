<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        // Keyword Pencarian
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $produk = $this->produkModel->search($keyword);
        } else {
            $produk = $this->produkModel;
        }

        // $produk = $this->produkModel->findAll(); //
        $data = [
            'title' => 'Daftar Produk',
            'produk' => $this->produkModel->getProduk()
        ];

        // Bisa Seperti Ini Juga 
        // $produkModel = new \App\Models\ProdukModel();
        // produkModel = new ProdukModel();
        return view('produk/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($slug)
        ];

        //Jika Produk tidak ada ditable
        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Produk ' . $slug . ' tidak ditemukan !');
        }

        return view('produk/detail', $data);
    }

    public function create()
    {
        // session();/
        $data = [
            'title' => 'Form Tambah Data Produk',
            'validation' => \Config\Services::validation()
        ];
        return view('produk/create', $data);
    }

    public function save()
    {
        // Validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[produk.nama]',
                'errors' => [
                    'required' => '{field} produk harus diisi.',
                    'is_unique' => '{field} produk sudah tersedia.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,2048]is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Max ukuran gambar 2mb.',
                    'is_image' => 'Yang anda masukkan bukan file berformat gambar (jpg,jpeg,png).',
                    'mime_in' => 'Yang anda masukkan bukan file berformat gambar (jpg,jpeg,png).',
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/produk/create')->withInput()->with('validation', $validation);
            return redirect()->to('/produk/create')->withInput();
        }

        // Ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // Jika tidak ada foto yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            // Generate nama foto random
            $namaFoto = $fileFoto->getName();
            // Pindah foto ke img
            $fileFoto->move('img', $namaFoto);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->produkModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'produsen' => $this->request->getVar('produsen'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        // Cari gambar berdasarkan id
        $produk = $this->produkModel->find($id);

        // Cek jika file gambar default
        if ($produk['foto'] != 'default.png') {

            // Hapus gambar
            unlink('img/' . $produk['foto']);
        }


        $this->produkModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/produk');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Produk',
            'validation' => \Config\Services::validation(),
            'produk' => $this->produkModel->getProduk($slug)
        ];
        return view('produk/edit', $data);
    }

    public function update($id)
    {
        // // Agar foto default tidak hilang
        // if ($this->request->getVar('fotoLama') != 'default.png') {
        //     unlink('img/' . $this->request->getVar('fotoLama'));
        // }

        //Validasi & cek nama, Update ambil dari save 
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[produk.nama,id,' . $id . ']',
                'errors' => [
                    'required' => '{field} produk harus diisi.',
                    'is_unique' => '{field} produk sudah tersedia.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,2048]is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Max ukuran gambar 2mb.',
                    'is_image' => 'Yang anda masukkan bukan file berformat gambar (jpg,jpeg,png).',
                    'mime_in' => 'Yang anda masukkan bukan file berformat gambar (jpg,jpeg,png).',
                ]
            ]
        ])) {
            return redirect()->to('/produk/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        // Cek foto apa tetap foto lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            // Generate file random name
            $namaFoto = $fileFoto->getName();
            // Pindah foto produk
            $fileFoto->move('img', $namaFoto);
            // Hapus foto yang lama
            unlink('img/' . $this->request->getVar('fotoLama'));
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->produkModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'produsen' => $this->request->getVar('produsen'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/produk');
    }
}
