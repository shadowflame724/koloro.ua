<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BriefConnectAbout extends Model
{
    protected $table = 'brief_connect_about';

    protected $fillable = ['brief_about_id','brief_id'];

    public function abouts()
    {
        return $this->hasMany(BriefAbout::class);
    }
}
