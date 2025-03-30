<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

class ArticleTranslation extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'meta_keywords',
    ];


    public $timestamps = false;

    protected $casts = [
        'meta_keywords' => 'array',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'method' => function ($string, $separator) {
                    return Str::slug($string, $separator, app()->getLocale() === 'ar' ? null : 'en');
                },
            ]
        ];
    }
}
