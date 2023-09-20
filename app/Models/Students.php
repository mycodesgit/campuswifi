<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Students extends Authenticatable
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'stud_id',
        'fullname',
        'password',
        'studlist_id',
        'vc_id',
    ];
    public function isStudent()
    {
        return $this->role === 'Student';
    }
}
