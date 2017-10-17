<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BriefConnectService extends Model
{
    protected $table = 'brief_connect_service';

    protected $fillable = ['brief_service_id','brief_id'];

    public function services()
    {
        return $this->hasMany(BriefService::class);
    }
}
