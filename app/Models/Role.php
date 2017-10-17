<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];

    public function Permission()
    {
        return $this->belongsToMany('App\Models\Permission');
    }
    public function User()
    {
        return $this->belongsToMany('App\User');
    }
}
