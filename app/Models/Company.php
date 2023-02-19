<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    use HasFactory;

    protected $fillable = [
        
        'companyname',
        'email',
        'phone',
        'status',
        'accname',
        'accnumber',
        'bankname',
        'address',
        'desc',
        'companylogo',

    ];
}
