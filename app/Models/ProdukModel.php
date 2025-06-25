<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'satuan', 'category','harga']; 

    public function insertData($data)
    {
        return $this->insert($data);
    }
    public function getData($data){ 
        return $this->where('id', $data)->first();
    }
}

