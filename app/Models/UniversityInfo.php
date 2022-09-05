<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'instituteName',
        'passingYear',
        'result',                
        'academicSession',                
    ];
}
