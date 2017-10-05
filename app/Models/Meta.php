<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta';

    protected $fillable = ['title_ru', 'title_ua', 'description_ru', 'description_ua', 'name','robots','keywords_ru', 'keywords_ua','canonical'];

    public $timestamps = false;

    public function service()
    {
        return $this->hasOne(Service::class, 'meta_id');
    }

    public function blogCategory()
    {
        return $this->hasOne(BlogCategory::class, 'meta_id');
    }

    //meta removed
//    public function ServiceCategory()
//    {
//        return $this->hasMany(ServiceCategory::class);
//    }

    public function blog()
    {
        return $this->hasOne(Blog::class, 'meta_id');
    }

    public function portfolio()
    {
        return $this->hasOne(Blog::class, 'meta_id');
    }

    public function portfolioCategory()
    {
        return $this->hasOne(PortfolioCategory::class, 'meta_id');
    }

    public function page()
    {
        return $this->hasOne(Page::class, 'meta_id');
    }
}
