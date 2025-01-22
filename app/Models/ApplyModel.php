<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplyModel extends Model
{
    protected $table      = 'p001';
    protected $primaryKey = 'p001nokp';

    protected $allowedFields = ['p001nama','p001kprog','p001kaedah','p001modebelajar','p001sesimsk','p001tajuk','p001penyelia','p001tkhlahir','p001kwarganegara','p001kwarga','p001kbumi','p001knlahir','p001kjantina',
    'p001kkaum','p001kagama','p001kkahwin','p001alamat1','p001alamat2','p001bandar','p001knegeri','p001poskod','p001alamatt1','p001alamatt2','p001bandart','p001knegerit','p001poskodt','p001notel',
    'p001nohp','p001email','p001kcacat','p001bmspm','p001bispm','p001muet','p001akadtinggi','p001sekmen','p001lykmsk','p001kdapat','p001kpenaja','p001tkhpohon','p001tkhstatus','p001status','p001kdun',
    'p001cgpa','p001unilama','p001bilexp','p001catatan','p001kkampus','p001knegaracgpa','p001cgpa2','p001knegaracgpa2','p001unilama2','p001payid','p001nec','p001khas','p001uppfolio','p001jnstawar',
    'p001nosrttawar','p001emailpromo','p001khusus','p001ejenname','p001ejenemail','p001ejenhpno','p001laluanmohon','p001setujutransfer','p001ststerimatwr','p001nooku','p001surname','p001faxno','p001offno',
    'p001faxnot','p001offnot','p001amthouse','p001tkhsuratlulus','p001dtkhexpired','p001cttnlulus','p001pelulus','p001noregbi','p001norujuk','p001alamatneg','p001alamatnegt'
    ];

    // Disable automatic timestamps
    //protected $useTimestamps = false; // This disables created_at and updated_at
    //protected $createdField = 'date';   // Set 'date' as the field for timestamp
}
