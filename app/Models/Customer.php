<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $tables = 'customers';
    use HasFactory;

    protected $fillable = [

        
        'customername',
        'phone',
        'address',
        'status',
        'qty1',
        'desc1',
        'unit1',
        'amount1',
        'qty2',
        'desc2',
        'unit2',
        'amount2',
        'qty3',
        'desc3',
        'unit3',
        'amount3',
        'qty4',
        'desc4',
        'unit4',
        'amount4',
        'qty5',
        'desc5',
        'unit5',
        'amount5',
        'qty6',
        'desc6',
        'unit6',
        'amount6',

    ];
}
