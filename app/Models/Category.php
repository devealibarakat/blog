<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $fillable = [];
    public $translatedAttributes = [
        'locale',
        'name',
    ];

    public function articles()
    {

        return $this->hasMany(Article::class);
    }


}
