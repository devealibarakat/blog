<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    public $fillable = [
        'id',
        'name',
        'age',

    ];
    public function doctor()
    {

        return $this->hasOneThrough(Doctor::class, Midecal::class, 'patent_id', 'midecal_id', 'id', 'id');
    }
}
