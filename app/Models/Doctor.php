<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;

class Doctor extends Model implements Auditable
{
    use HasFactory, SoftDeletes, Notifiable;
    use \OwenIt\Auditing\Auditable;


    protected $fillable = [
        'user_id',
        'department_id',
        'image',
        'first_name',
        'middle_name',
        'last_name',
        'license_no',
        'email',
        'password',
        'role',
        'nepali_dob',
        'english_dob',
        'gender',
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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function schedule(){
        return $this->hasMany(Schedule::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function education(){
        return $this->hasMany(Education::class);
    }

    public function experience(){
        return $this->hasMany(Experience::class);
    }

    public function patient(){
        return $this->hasMany(Patient::class);
    }

    public function booking(){
        return $this->hasMany(Booking::class);
    }




}
