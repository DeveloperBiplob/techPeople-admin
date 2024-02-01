<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'designation', 'description', 'image'];

    public function setSlugAttribute($value)
    {
        $customSlug = $value . Str::random(10);
        $this->attributes['slug'] = Str::slug($customSlug);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
