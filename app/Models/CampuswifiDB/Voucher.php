<?php

namespace App\Models\CampuswifiDB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'voucher';

    protected $fillable = [
        'voucher_code',
        'status',
        'semester',
        'schlyear'
    ];
}
