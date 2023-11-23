<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function category() {
        return $this->belongsToMany(BlogsCategories::class);
    }
}
