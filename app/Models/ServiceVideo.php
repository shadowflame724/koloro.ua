<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceVideo extends Model
{
    protected $table = 'servicevideo';

    public $timestamps = false;

    protected $fillable = ['service_id', 'video_name', 'work_count', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
