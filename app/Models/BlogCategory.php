<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blogcategory';

    protected $fillable = ['name_ru', 'name_ua', 'meta_id', 'slug'];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }
}
