<?php

namespace App\Models\CampuswifiDB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherStud extends Model
{
    use HasFactory;

    protected $table = 'studvoucherreg';

    protected $fillable = [
        'stud_id',
        'fullname',
        'vc_id',
        'role',
        'schlyear',
        'semester'
    ];
}
