<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BriefAbout extends Model
{
    protected $table = 'brief_about';

    protected $fillable = ['name'];

    public function briefs()
    {
        return $this->belongsToMany('App\Models\Brief')
            ->withTimestamps();
    }
}
