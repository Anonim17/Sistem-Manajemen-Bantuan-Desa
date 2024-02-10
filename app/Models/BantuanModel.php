<?php

namespace App\Models;

use CodeIgniter\Model;

class BantuanModel extends Model {
    protected $table    = 'bantuan';
    protected $primary  = 'id';
    protected $primaryKey  = 'id';

    protected $useAutoIncrement = true;

    protected $returnType   = 'array';
    protected $useSoftDeletes   = false;

    // protected $useTimestamps = true;

    protected $allowedFields    = ['id', 'nama_bantuan', 'jumlah_bantuan'];

    // protected $createdField = 'created_at';

    // protected $skipValidation   = true;
}
