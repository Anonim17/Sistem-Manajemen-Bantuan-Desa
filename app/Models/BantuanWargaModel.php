<?php

namespace App\Models;

use CodeIgniter\Model;

class BantuanWargaModel extends Model {
    protected $table    = 'bantuan_warga';
    protected $primary  = 'id';
    protected $primaryKey  = 'id';

    protected $useAutoIncrement = true;

    protected $returnType   = 'array';
    protected $useSoftDeletes   = false;

    // protected $useTimestamps = true;

    protected $allowedFields    = ['id', 'no_kk', 'id_bantuan', 'status', 'tanggal_bantuan'];

    // protected $createdField = 'created_at';

    // protected $skipValidation   = true;
}
