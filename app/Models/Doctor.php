<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'first_name',
        'middle_name',
        'last_name',
        'license_no',
        'email',
        'role',
        'nepali_dob',
        'english_dob',
        'gender',
        'department',
        'specialization',
        'qualification',
        'province',
        'district',
        'municipality',
        'ward',
        'city',
        'tole',
        'contact',
        'status'
    ];

    // protected $hidden = [
    //     'password',
    // ];
}