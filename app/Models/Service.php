<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Service extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * Sluggable configuration.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from'      => 'name_ru',
        'save_to'         => 'slug',
        'separator'       => '-',
        'include_trashed' => true,
    ];

    protected $table = 'service';

    protected $fillable = ['name', 'name_ru', 'name_ua', 'price',
        'content_ru', 'content_ua', 'description_ru', 'description_ua', 'lang',
        'slug', 'category_id', 'image_id', 'meta_id', 'blog_ids'
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function image()
    {
        return $this->belongsTo(File::class);
    }

    public function blocks()
    {
        return $this->hasMany(ServiceBlocks::class);
    }

    public function video()
    {
        return $this->hasOne(ServiceVideo::class);
    }

    public function blogArticles()
    {
        return Blog::whereIn('id', explode(',', $this->blog_ids))->get();
    }

    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }


}
