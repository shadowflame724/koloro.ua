<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = ['name_ru', 'name_ua', 'description_ru', 'description_ua', 'content_ru', 'content_ua',
        'user_id', 'category_id', 'slug', 'meta_id', 'published_at', 'image_id', 'rating', 'votes', 'views'];


    public function file()
    {
        return $this->belongsTo(File::class, 'image_id');
    }


    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }

    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
