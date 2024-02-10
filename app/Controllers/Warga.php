<?php

namespace App\Controllers;

use App\Models\WargaModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use Config\Encryption;
use CodeIgniter\Model;
use CodeIgniter\Validation\Rules;

class Warga extends BaseController
{
    public function warga_create()
    {
        return view('warga/create');
    }

    public function warga_index()
    {
        $db = db_connect(); // Mendapatkan koneksi database

        // Query SQL untuk menghitung jumlah anggota keluarga berdasarkan no_kk yang sama
        $query = "SELECT 
                    no_kk,
                    COUNT(*) AS jumlah_anggota,
                    SUM(pendapatan) AS jml_pendapatan
                FROM warga
                GROUP BY no_kk";

        $result = $db->query($query)->getResultArray();
        $data = [
            'data' => $result,
        ];

        return view('warga/index', $data);
    }

    public function warga_detail($no_kk)
    {
        $db = db_connect(); // Mendapatkan koneksi database

        // Query SQL untuk menghitung jumlah anggota keluarga berdasarkan no_kk yang sama
        $query = "
                SELECT *
                FROM warga
                WHERE no_kk = " . $no_kk . "
                ";

        $result = $db->query($query)->getResultArray();

        return view('warga/detail', ['data' => $result]);
    }

    public function warga_update($nik)
    {
        $wargaModel = new wargaModel();

        return view('warga/update', ['data' => $wargaModel->find($nik)]);
    }

    public function warga_store()
    {
        $warga_model = new wargaModel();

        $validation = \Config\Services::validation();

        $validationRules = [
            'nik' => [
                'rules' => 'required|exact_length[16]',
                'errors' => [
                    'required' => 'Input harus diisi.',
                    'exact_length' => 'Panjang input harus tepat 16 karakter.'
                ]
            ],
            'no_kk' => [
                'rules' => 'required|exact_length[16]',
                'errors' => [
                    'required' => 'Input harus diisi.',
                    'exact_length' => 'Panjang input harus tepat 16 karakter.'
                ]
            ],
            'hubungan_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Input harus diisi.',
                ]
            ]
        ];

        $data = [
            'nik' => $this->request->getPost('nik'),
            'no_kk' => $this->request->getPost('no_kk'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'status_kawin' => $this->request->getPost('status_kawin'),
            'status_kependudukan' => $this->request->getPost('status_kependudukan'),
            'hubungan_keluarga' => $this->request->getPost('hubungan_keluarga'),
            'kondisi_fisik' => $this->request->getPost('kondisi_fisik'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'status_pensiun' => $this->request->getPost('status_pensiun'),
            'pendapatan' => $this->request->getPost('pendapatan'),
            'usaha' => $this->request->getPost('usaha'),
            'alamat' => $this->request->getPost('alamat'),
            'no_rumah' => $this->request->getPost('no_rumah'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];

        if (!$validation->setRules($validationRules)->run($data)) {
            // Validasi gagal, tampilkan pesan error
            $errors = $validation->getErrors();
            session()->setFlashdata('notif', $errors);
            return redirect()->to(base_url('/warga/create'));
        } else {
            try {
                $warga_model->insert($data);

                session()->setFlashdata('notif', 'Data Berhasil Ditambahkan!');
                return redirect()->to(base_url('/warga/index'));
            } catch (DatabaseException $e) {
                $errors = $e->getMessage();

                session()->setFlashdata('notif', $errors);
                return redirect()->to(base_url('/warga/index'));
            }
        }
    }

    public function update_save()
    {
        $warga_model = new wargaModel();

        $data = [
            'no_kk' => $this->request->getPost('no_kk'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'status_kawin' => $this->request->getPost('status_kawin'),
            'status_kependudukan' => $this->request->getPost('status_kependudukan'),
            'hubungan_keluarga' => $this->request->getPost('hubungan_keluarga'),
            'kondisi_fisik' => $this->request->getPost('kondisi_fisik'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'status_pensiun' => $this->request->getPost('status_pensiun'),
            'pendapatan' => $this->request->getPost('pendapatan'),
            'usaha' => $this->request->getPost('usaha'),
            'alamat' => $this->request->getPost('alamat'),
            'no_rumah' => $this->request->getPost('no_rumah'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];

        if ($warga_model->update($this->request->getPost('nik'), $data, null)) {
            session()->setFlashdata('notif', 'Data Berhasil Diubah!');
            return redirect()->to(base_url('/warga/detail/' . $this->request->getPost('no_kk')));
        } else {
            session()->setFlashdata('notif', 'Data Gagal Diubah!');
            return redirect()->to(base_url('/warga/index/' . $this->request->getPost('no_kk')));
        }
    }

    public function warga_delete($nik)
    {
        $wargaModel = new wargaModel();

        $wargaModel->delete($nik);

        session()->setFlashdata('notif', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url('/warga/index'));
    }
}
