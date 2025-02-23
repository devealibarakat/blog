<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    public $fillable = [
        'id',
        'doctor_name',
        'title',
        'hospital_id',
        'danger',
        'midecal_id',

    ];
    public function hospital()
    {

        return $this->belongsTo(Hospital::class);
    }
    public function service()
    {
        return $this->belongsToMany(Serves::class, 'doctors_serves');
    }
}
