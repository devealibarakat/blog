<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements TranslatableContract, HasMedia
{
    use HasFactory, Translatable, InteractsWithMedia;


    public $fillable = [
        'id',
        'tag_id'
    ];

    protected $appends = [
        'image',
        'thumb',
        'avatar',
    ];
    public $translatedAttributes = [
        'title',
        'slug',
        'short_description',
        'description',
        'meta_keywords',
    ];


    protected $casts = [
        'id' => 'integer',
        'tag_id' => 'array'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('articals');

        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 900, 420)
            ->nonQueued();

        $this->addMediaConversion('avatar')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();

        $this->addMediaConversion('small_wide')
            ->fit(Manipulations::FIT_CROP, 360, 139)
            ->nonQueued();
    }

    public function getImageAttribute(): string|null
    {
        $media = $this->getMedia('default')->first();
        $url = ($media) ? $media->getUrl() : null;
        return $url;
    }

    public function getThumbAttribute(): string|null
    {
        $media = $this->getMedia('default')->first();
        $url = ($media) ? $media->getUrl('thumb') : null;
        return $url;
    }

    public function getAvatarAttribute(): string|null
    {
        $media = $this->getMedia('default')->first();
        $url = ($media) ? $media->getUrl('avatar') : null;
        return $url;
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'article_author', 'article_id', 'author_id');
    }
    public function Categories()
    {
        return $this->belongsToMany(Category::class, 'category_article');
    }
}
