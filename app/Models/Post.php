<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'description', 'image', 'status'];

    protected $with = ['category'];

   /**
    * Get the route key for the model.
    */
   public function getRouteKeyName(): string
   {
       return 'slug';
   }

   public function category()
   {
       return $this->belongsTo(BlogCategory::class);
   }

   public function tags()
   {
       return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
   }

}
