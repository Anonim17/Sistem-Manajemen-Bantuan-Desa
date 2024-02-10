<?php

namespace App\Controllers;

use App\Models\BantuanWargaModel;
use App\Models\BantuanModel;
use App\Models\WargaModel;
use Config\Encryption;
use CodeIgniter\Model;
use mysqli;

class Bantuan_Warga extends BaseController
{
    public function bantuan_index()
    {
        $db = db_connect(); // Mendapatkan koneksi database
        $query = "SELECT warga.nik, warga.nama, warga.no_kk, bantuan.nama_bantuan, bantuan.jumlah_bantuan, bantuan_warga.status, bantuan_warga.tanggal_bantuan, bantuan_warga.id_bantuan, bantuan_warga.id
                FROM warga, bantuan, bantuan_warga
                WHERE warga.no_kk = bantuan_warga.no_kk and bantuan.id = bantuan_warga.id_bantuan and warga.hubungan_keluarga = 'Kepala Keluarga' ";

        $result = $db->query($query)->getResultArray();

        $query2 = "SELECT * FROM bantuan";

        $result2 = $db->query($query2)->getResultArray();

        return view('bantuan_warga/index', ['data' => $result, 'bantuan' => $result2]);
    }

    public function bantuan_create()
    {
        $db = db_connect(); // Mendapatkan koneksi database
        $query = "SELECT 
                    no_kk,
                    MAX(nama) AS nama,
                    COUNT(*) AS jumlah_anggota,
                    SUM(pendapatan) AS jml_pendapatan
                FROM warga
                WHERE hubungan_keluarga = 'Kepala Keluarga'
                GROUP BY no_kk
                HAVING jml_pendapatan < 1600000";

        $warga_model = $db->query($query)->getResultArray();

        $bantuan_model = new BantuanModel();

        $data = [
            $warga_model,
            $bantuan_model->findAll(),
        ];

        return view('bantuan_warga/create', ['data' => $data]);
    }

    public function bantuan_store()
    {
        $no_kk = $this->request->getPost('no_kk');
        $id_bantuan = $this->request->getPost('id_bantuan');
        $status = $this->request->getPost('status');
        $tanggal_bantuan = $this->request->getPost('tanggal_bantuan');

        $db = db_connect(); // Mendapatkan koneksi database
        // $mysqli = new mysqli("localhost", "root", "", "db_bantuan_desa");
        $query = "INSERT INTO bantuan_warga (no_kk, id_bantuan, status, tanggal_bantuan)
                    SELECT '".$no_kk."', '".$id_bantuan."', '".$status."', '".$tanggal_bantuan."'
                    WHERE NOT EXISTS (
                        SELECT 1
                        FROM bantuan_warga
                        WHERE no_kk = '".$no_kk."' AND id_bantuan = '".$id_bantuan."'
                    )";

        if($db->simpleQuery($query)) {
            session()->setFlashdata('notif', 'Data Berhasil Ditambahkan!');
            return redirect()->to(base_url('/bantuan_warga/index'));
        }else{
            session()->setFlashdata('notif', 'Data Gagal Ditambahkan!');
            return redirect()->to(base_url('/bantuan_warga/index'));
        }
    }

    public function bantuan_diterima($id)
    {
        $bantuan_model = new BantuanWargaModel();

        $data = [
            'status' => 'Diterima',
        ];

        if ($bantuan_model->update($id, $data, null)) {
            session()->setFlashdata('notif', 'Data Berhasil Diubah!');
            return redirect()->to(base_url('/bantuan_warga/index'));
        } else {
            session()->setFlashdata('notif', 'Data Gagal Ditambahkan!');
            return redirect()->to(base_url('/bantuan_warga/index'));
        }
    }

    public function bantuan_ditolak($id)
    {
        $bantuan_model = new BantuanWargaModel();

        $data = [
            'status' => 'Belum Diterima',
        ];

        if ($bantuan_model->update($id, $data, null)) {
            session()->setFlashdata('notif', 'Data Berhasil Diubah!');
            return redirect()->to(base_url('/bantuan_warga/index'));
        } else {
            session()->setFlashdata('notif', 'Data Gagal Ditambahkan!');
            return redirect()->to(base_url('/bantuan_warga/index'));
        }
    }

    public function bantuan_delete($id)
    {
        $bantuan_model = new BantuanWargaModel();

        $bantuan_model->delete($id);

        session()->setFlashdata('notif', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url('/bantuan_warga/index'));
    }
}
