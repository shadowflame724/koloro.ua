<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'servicecategory';

    protected $fillable = ['name_ru', 'name_ua', 'description_ru', 'description_ua', 'order'];

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }

    public function image()
    {
        return $this->belongsTo(File::class);
    }
}
