<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BriefService extends Model
{
    protected $table = 'brief_service';

    protected $fillable = ['name'];

    public function briefs()
    {
        return $this->belongsToMany('App\Models\Brief')
            ->withTimestamps();
    }
}
