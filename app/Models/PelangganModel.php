<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'telp','address']; 

    public function insertData($data)
    {
        return $this->insert($data);
    }
    public function getData($data){ 
        return $this->where('id', $data)->first();
    }
}

