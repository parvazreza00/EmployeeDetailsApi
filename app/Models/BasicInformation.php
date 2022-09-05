<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'fatherName',
        'motherName',
        'religion',
        'maritalStatus',
        'bloodGroup',
        'telephoneNo',        
        'birthDate',        
        'temporaryAddrees',        
        'parmanentAddress',        
        'nid',        
        'passport',        
        'insuranceNo',   
    ];
}
