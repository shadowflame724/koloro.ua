<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceBlocks extends Model
{
    protected $table = 'serviceblocks';

    public $timestamps = false;

    protected $fillable = ['service_id', 'title_ru', 'title_ua', 'content_ru', 'content_ua', 'image_ids', 'sort'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        $imageIds = $this->image_ids;

        if (strlen($imageIds) > 0) {

            return File::whereIn('id', explode(',', $this->image_ids))->get();
        } else return [];
    }

}
