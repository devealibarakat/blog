<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable  = [];

    public $translatedAttributes = ['name'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function articals()
    {
        return $this->belongsToMany(Article::class, 'article_tag');
    }
}
