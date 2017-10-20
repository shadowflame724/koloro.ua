<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'manager';
    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(File::class, 'image_id');
    }
}
