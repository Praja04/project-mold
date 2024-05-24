<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'role'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
    public function getUser()
    {
        return $this->findAll(); 
    }

    public function TotalUser(){
        return $this->db->table('users')->countAllResults();
    }


}
