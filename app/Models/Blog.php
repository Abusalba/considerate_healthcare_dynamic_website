<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\DatetimeTraits;
use Illuminate\Support\Str;

class Blog extends Model
{
    use DatetimeTraits;
     protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'date',
        'status',
    ];
    
    public function getImageAttribute($value)
    {
        return asset($value);
    }
    protected static function boot()
    {
        parent::boot();
        
        static::saving(function ($blog) {
            // Auto-generate slug only if it's empty and title exists
            if (empty($blog->slug) && !empty($blog->title)) {
                $blog->slug = Str::slug($blog->title);
                
                // Optional: Handle duplicate slugs
                $originalSlug = $blog->slug;
                $counter = 1;
                
                while (static::where('slug', $blog->slug)->where('id', '!=', $blog->id)->exists()) {
                    $blog->slug = $originalSlug . '-' . $counter;
                    $counter++;
                }
            }
        });
    }
}
