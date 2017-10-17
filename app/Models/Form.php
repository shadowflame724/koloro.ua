<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';

    protected $fillable = ['name','contact','text','file_id','email','phone'];

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
