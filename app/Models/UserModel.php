<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table    = 'user';
    protected $primary  = 'id';
    protected $primaryKey  = 'id';

    protected $useAutoIncrement = true;

    protected $returnType   = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = ['id', 'nik', 'username', 'password', 'level', 'status'];

    // protected $skipValidation   = true;

    public function get_data($username, $password)
    {
        return $this->db->table('user')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
