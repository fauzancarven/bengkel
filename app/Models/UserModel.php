<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password', 'email'];
    public function getEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}

