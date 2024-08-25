<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon; // Import Carbon

class BlogPost extends Model
{
    use HasFactory;

    // Define mass assignable attributes
    protected $fillable = [
        'title',
        'content',
        'author',
        'banner_image',
        'content_image',
        'published_at',
    ];

    // Cast dates to Carbon instances
    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('title')) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
