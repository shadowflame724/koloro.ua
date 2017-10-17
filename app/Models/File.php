<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';

    protected $fillable = ['link','form_id','brief_id', 'alt'];
    public function Form()
    {
        return $this->hasMany(Form::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function Brief()
    {
        return $this->hasMany(Brief::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class, 'image_id');
    }

    public function servicecategory()
    {
        return $this->hasMany(ServiceCategory::class, 'image_id');
    }

    protected function Folder($path)
    {

    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class, 'image_id');
    }
}
