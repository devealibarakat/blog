<?php

namespace App\Models;

use App\Filament\Traits\InputsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Filament\Forms\Set;

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
