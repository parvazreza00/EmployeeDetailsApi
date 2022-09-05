<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomineeInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomineeName',
        'relation',
        'address',                
        'dateOfBirth',                
        'phone',                
        'parmanentAddress',                      
    ];
}
