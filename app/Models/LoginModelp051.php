<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = 'ppsdblocal.p051';
    protected $primaryKey = 'p051emel';

    protected $allowedFields = [
        'p051username','p051password','p051emel','p051katwarga','p051statsahreg','p051verifycode','p051usrid','p051tkhreg'
    ];

    // Disable automatic timestamps
    //protected $useTimestamps = false; // This disables created_at and updated_at
    //protected $createdField = 'date';   // Set 'date' as the field for timestamp
}
