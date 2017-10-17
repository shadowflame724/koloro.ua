<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';
    protected $fillable = ['name_ru', 'name_ua', 'meta_id'];

    public $timestamps = false;

    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }

}
