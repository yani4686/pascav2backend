<?php

namespace App\Models;

use CodeIgniter\Model;

class AttachmentModel extends Model
{
    protected $table      = 'p001c';
    protected $primaryKey = 'p001cnorujuk';

    protected $allowedFields = ['p001cnorujuk','p001cproses','p001cupdocument','p001cdir'];

    // Disable automatic timestamps
    //protected $useTimestamps = false; // This disables created_at and updated_at
    //protected $createdField = 'date';   // Set 'date' as the field for timestamp
}
