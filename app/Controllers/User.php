<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Validation\StrictRules\Rules;
use CodeIgniter\Validation\Validation;

class User extends BaseController
{


    protected $userModel;
    public function __construct()
    {
        // JIKA INGIN MENGGUNAKAN MODEL DI SATU CONTROLLER GUNAKAN "__construct"
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // membuat urutan table
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;
        
        // pencarian data user
        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $user = $this->userModel->search($keyword);
        }else {
            $user = $this->userModel;
        }

        // 'user' => $this->userModel->findAll(),
        $data = [
            'title' => 'Daftar User',
            'user' => $user->paginate(10, 'user'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage
        ];
        return view('user/index', $data);
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan', 'data user berhasil di Hapus');
        return redirect()->to('/user');
    }

    public function save()
    {
        $nama = url_title($this->request->getVar('nama'), '-', true);
        $this->userModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email')
        ]);
        session()->setFlashdata('pesan', 'User berhasil ditambahkan');
        return redirect()->to('/user');
    }
}
