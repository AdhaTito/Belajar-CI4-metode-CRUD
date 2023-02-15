<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email'];

    public function search($keyword) 
    {
        return $this->table('user')->like('nama', $keyword);
    }
}
