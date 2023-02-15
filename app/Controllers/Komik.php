<?php

namespace App\Controllers;

use App\Models\KomikModel;
use CodeIgniter\Validation\StrictRules\Rules;
use CodeIgniter\Validation\Validation;

class Komik extends BaseController
{


    protected $KomikModel;
    public function __construct()
    {
        // JIKA INGIN MENGGUNAKAN MODEL DI SATU CONTROLLER GUNAKAN "__construct"
        $this->KomikModel = new KomikModel();
    }
    public function index()
    {
        // membuat urutan table
        $currentPage = $this->request->getVar('page_komik') ? $this->request->getVar('page_komik') : 1;

        // pencarian data komik
        $keyword = $this->request->getVar('keyword2');
        if ($keyword) {
            $judul = $this->KomikModel->search($keyword);
        } else {
            $judul = $this->KomikModel;
        }
        // Menampilkan Semua yg ada di table
        //$komik = $this->KomikModel->findall();
        $data = [
            'title' => 'Daftar Komik',
            // 'komik' => $this->KomikModel->getKomik(),
            'komik' => $judul->paginate(5, 'komik'),
            'pager' => $this->KomikModel->pager,
            'currentPage' => $currentPage,
            // Validasi Modal
            'validation' => \Config\Services::validation()
        ];
        
        // Cara connect Database tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($komik);
        // }

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->KomikModel->getKomik($slug);
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        // Jika Komik tidak ada ditable
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data  ' . $slug . '  Tidak Ditemukan');
        }

        return view('komik/detail', $data);
    }

    // Function view create.php
    // public function create()
    // {
    //     $data = [
    //         'title' => 'Form Tambah Komik',
    //         'validation' => \Config\Services::validation()
    //     ];
    //     return view('komik/create', $data);
    // }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'is_unique' => '{field} Komik Sudah Terdaftar'
                ]
            ],
            'penulis' => 'required[komik.penulis]',
            'cover' => [
                'rules' => 'max_size[cover,3072]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran {field} terlalu besar',
                    'mime_in' => 'Type {field} tidak sesuai',
                    'is_image' => 'Masukan {field} yang sesuai'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to(base_url().'/komik')->withInput()->with('validation', $validation);
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url() . '/komik')->withInput();
        }

        // Ambil Gambar
        $filecover = $this->request->getFile('cover');
        // Apakah ad gambar yg di input
        if ($filecover->getError() == 4) {
            $namacover = 'thumbnail.png';
        } else {
            // Ambil nama gambar
            $namacover = $filecover->getRandomName();
            // pindahkan gambar ke folder images
            $filecover->move('images', $namacover);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sinopsis' => $this->request->getPost('sinopsis'),
            'cover' => $namacover
        ]);

        session()->setFlashdata('pesan', 'Komik berhasil ditambahkan');
        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        // Cari gambar berdasarkan id
        $komik = $this->KomikModel->find($id);

        // jgn hapus gambar thumbnail.png
        if ($komik['cover'] != 'thumbnail.png') {
            // selain thumbnail baru hapus
            unlink('images/' . $komik['cover']);
        }

        $this->KomikModel->delete($id);
        session()->setFlashdata('pesan', 'Komik berhasil diHapus');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        return view('komik/edit', $data);
    }

    public function update($id)
    {
        //Cek validasi judul
        $KomikLama = $this->KomikModel->getKomik($this->request->getVar('slug'));
        if ($KomikLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        // validasi update
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'is_unique' => '{field} Komik Sudah Terdaftar'
                ]
            ],
            'penulis' => 'required[komik.penulis]',
            'cover' => [
                'rules' => 'max_size[cover,3072]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran {field} terlalu besar',
                    'mime_in' => 'Type {field} tidak sesuai',
                    'is_image' => 'Masukan {field} yang sesuai'
                ]
            ]

        ])) {
            // dd($validation);
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url() . '/komik/edit/' . $this->request->getVar('slug'))->withInput();
        }

        // Ambil Gambar
        $filecover = $this->request->getFile('cover');
        // cek cover apakah berubah atau tidak
        if ($filecover->getError() == 4) {
            $namacover = $this->request->getVar('coverLama');
        } else {
            // ubah nama cover menjadi random name
            $namacover = $filecover->getRandomName();
            // upload cover ke folder images
            $filecover->move('images/', $namacover);
            // "jika" gambar thumbnail di ganti baru "jgn hapus" gambar thumbnail
            if (
                $this->request->getVar('coverLama') != 'thumbnail.png'
            ) {
                // "jika" selain gambar thumnail "Hapus"
                unlink('images/' . $this->request->getVar('coverLama'));
            }
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            "id" => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sinopsis' => $this->request->getPost('sinopsis'),
            'cover' => $namacover
        ]);

        session()->setFlashdata('pesan', 'Komik berhasil diubah');
        return redirect()->to('/komik');
    }
}
