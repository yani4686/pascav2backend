<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table      = 'p001';
    protected $primaryKey = 'p001nokp';

    protected $allowedFields = [
        'p001nama','p001kprog', 'p001kaedah'
    ];

    // Disable automatic timestamps
    //protected $useTimestamps = false; // This disables created_at and updated_at
    //protected $createdField = 'date';   // Set 'date' as the field for timestamp
}
