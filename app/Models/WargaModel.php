<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model {
    protected $table    = 'warga';
    protected $primary  = 'nik';
    protected $primaryKey  = 'nik';

    // protected $useAutoIncrement = true;

    protected $returnType   = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = ['nik', 'no_kk', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'pendidikan', 'status_kawin', 'status_kependudukan', 'hubungan_keluarga', 'kondisi_fisik', 'pekerjaan', 'status_pensiun', 'pendapatan', 'usaha', 'alamat', 'no_rumah', 'rt', 'rw', 'no_telp'];

    // protected $skipValidation   = true;
}
