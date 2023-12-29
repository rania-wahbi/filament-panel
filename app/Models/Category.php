<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'image',
        'parent_id',
        'status',
        'show_in_menu',
        'sort'

    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function parent(){
        return $this->belongsTo(Category::class);
    }

}
