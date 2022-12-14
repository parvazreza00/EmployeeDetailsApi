<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobType',
        'designation',
        'salary',
        'registrationDate',          
        'joinDate',          
        'resignDate',          
        'confirmationDate',          
        'salaryIncrementDate',          
    ];
}
