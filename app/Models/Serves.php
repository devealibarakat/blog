<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serves extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'name',
    ];
    function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctors_serves');
    }
}
