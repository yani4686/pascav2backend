<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = 'ppsdblocal.p00daftar';
    protected $primaryKey = 'p00uid';

    protected $allowedFields = [
        'p00username','p00password','p00emel','p00katwarga','p000statsahreg','p00verifycode','p00usrid'
    ];

    // Disable automatic timestamps
    //protected $useTimestamps = false; // This disables created_at and updated_at
    //protected $createdField = 'date';   // Set 'date' as the field for timestamp
}
