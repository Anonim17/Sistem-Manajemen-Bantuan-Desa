<?php

namespace App\Controllers;

use App\Models\BantuanModel;
use App\Models\WargaModel;
use Config\Encryption;
use CodeIgniter\Model;

class Bantuan extends BaseController
{
    public function bantuan_create()
    {
        return view('bantuan/create');
    }
    
    public function bantuan_store()
    {
        $bantuan_model = new BantuanModel();

        $data = [
            'nama_bantuan' => $this->request->getPost('nama_bantuan'),
            'jumlah_bantuan' => $this->request->getPost('jumlah_bantuan'),
        ];

        if ($bantuan_model->insert($data, false)) {
            session()->setFlashdata('notif', 'Data Berhasil Ditambahkan!');
            return redirect()->to(base_url('/bantuan/index'));
        } else {
            session()->setFlashdata('notif', 'Data Gagal Ditambahkan!');
            return redirect()->to(base_url('/bantuan/index'));
        }
    }

    public function bantuan_update($id)
    {
        $bantuan_model = new BantuanModel();

        return view('bantuan/update', ['data' => $bantuan_model->find($id)]);
    }

    public function update_save()
    {
        $bantuan_model = new BantuanModel();
        
        $data = [
            'nama_bantuan' => $this->request->getPost('nama_bantuan'),
            'jumlah_bantuan' => $this->request->getPost('jumlah_bantuan'),
        ];

        if ($bantuan_model->update($this->request->getPost('id'), $data, null)) {
            session()->setFlashdata('notif', 'Data Berhasil Diubah!');
            return redirect()->to(base_url('/bantuan/index'));
        } else {
            session()->setFlashdata('notif', 'Data Gagal Ditambahkan!');
            return redirect()->to(base_url('/bantuan/index'));
        }
    }

    public function bantuan_index()
    {
        $bantuan_model = new BantuanModel();

        return view('bantuan/index', ['data' => $bantuan_model->findAll()]);
    }

    public function bantuan_delete($id)
    {
        $bantuan_model = new BantuanModel();

        $bantuan_model->delete($id);

        session()->setFlashdata('notif', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url('/bantuan/index'));
    }
}
