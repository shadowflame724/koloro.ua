<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    protected $table = 'callback';

    protected $fillable = ['phone'];
}
