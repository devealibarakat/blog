<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midecal extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'pdf',
        'patent_id',
    ];
}
