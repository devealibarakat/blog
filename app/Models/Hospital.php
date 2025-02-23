<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'address',
        'county_id',
    ];
    protected $hidden = [

        'remember_token',
    ];
    public function doctor()
    {

        return $this->hasMany(Doctor::class);

    }
    public function country()
    {

        return $this->belongsTo(Country::class, 'countrie_id');

    }
}
