<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $fillable = [
        'zipcode',
        'province',
        'city',
        'barangay',
        'streetaddress',
        'address_id'
    ];
}
