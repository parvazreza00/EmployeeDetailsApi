<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'employeeId',
        'email',
        'fullName',
        'phone',
        'department',
        'password',        
    ];
}
