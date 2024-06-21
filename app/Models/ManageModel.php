<?php

namespace App\Models;

use CodeIgniter\Model;

class ManageModel extends Model
{
    protected $table = 'manage';
    protected $primaryKey = 'id_ad'; 
    protected $allowedFields = ['username_ad', 'email_ad', 'password_ad', 'role','status'];
    protected $useTimestamps = false;
}
