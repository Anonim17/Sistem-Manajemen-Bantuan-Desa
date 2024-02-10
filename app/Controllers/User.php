<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Encryption;
use CodeIgniter\Model;

class User extends Home
{
    public function user_index()
    {
        $muser = new UserModel();
        return view('user/index', ['data' => $muser->findAll()]);
    }

    public function user_update($id)
    {
        $muser = new UserModel();
        return view('user/update', ['data' => $muser->find($id)]);
    }

    public function update_save()
    {
        $muser = new UserModel();
        $encryption = service('encrypter');

        $data = [
            'nik' => $this->request->getPost('nik'),
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
            'level' => $this->request->getPost('level'),
            'status' => $this->request->getPost('status'),
        ];

        if ($muser->update($this->request->getPost('id'), $data, false)) {
            session()->setFlashdata('notif', 'Selamat anda punya akun baru!');
            return redirect()->to(base_url('/user/index'));
        } else {
            session()->setFlashdata('notif', 'Gagal buat akun!');
            return redirect()->to(base_url('/user/index'));
        }
    }

    public function user_create()
    {
        return view('user/create');
    }

    public function user_store()
    {
        $muser = new UserModel();
        $encryption = service('encrypter');

        $data = [
            'nik' => $this->request->getPost('nik'),
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
            'level' => $this->request->getPost('level'),
            'status' => $this->request->getPost('status'),
        ];

        if ($muser->insert($data, false)) {
            session()->setFlashdata('notif', 'Selamat anda punya akun baru!');
            return redirect()->to(base_url('/user/index'));
        } else {
            session()->setFlashdata('notif', 'Gagal buat akun!');
            return redirect()->to(base_url('/user/index'));
        }
    }

    public function user_delete($id)
    {
        $muser = new UserModel();

        $muser->delete($id);

        session()->setFlashdata('notif', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url('/user/index'));
    }
}
