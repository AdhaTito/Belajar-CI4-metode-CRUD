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
        //$komik = $this->KomikModel->findall();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->KomikModel->getKomik(),
            'validation' => \Config\Services::validation()
        ];

        // Validasi Modal
        

        // Cara connect Database tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($komik);
        // }

        // $KomikModel = new KomikModel();
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

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Komik',
            'validation' => \Config\Services::validation()
        ];
        return view('komik/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'judul' => 'required|is_unique[komik.judul]',
            'penulis' => 'required[komik.penulis]'
            
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url().'/komik/create')->withInput()->with('validation', $validation);
        } 
        
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'cover' => $this->request->getVar('cover')
        ]);

        session()->setFlashdata('pesan', 'Komik berhasil ditambahkan');
        return redirect()->to('/komik');
    }

    public function delete($id)
    {
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
}
