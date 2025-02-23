<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $fillable = [
        'id',
        'name',
    ];

    public function doctors()
    {
        return $this->hasManyThrough(Doctor::class, Hospital::class, 'countire_id', 'hospital_id', 'id', 'id');
    }

    public function hospital()
    {
        return $this->hasOne(Hospital::class);
    }
}
