<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    public $timestamps = false;

    protected $fillable = ['title_ru', 'title_ua', 'short_desc_ru', 'short_desc_ua', 'text_ru', 'text_ua', 'seo_title', 'keywords'
        , 'description', 'img_small', 'img_big', 'result', 'block_one', 'block_two'
        , 'block_tre', 'procent_one', 'procent_two', 'procent_tre', 'work_url', 'rating'
        , 'rait_count', 'cat_1', 'cat_2', 'cat_3', 'cat_4', 'order', 'image_id', 'meta_id'
    ];

    public function portfolioCategories()
    {
        return PortfolioCategory::whereIn('id', [$this->category_ids])->get();
    }

    public function image()
    {
        return $this->belongsTo(File::class);
    }

    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }
}
