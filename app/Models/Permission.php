<?php

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 06.04.2017
 * Time: 8:38
 */
class Permission extends EntrustPermission
{
    //empty class for RBAC requirements
    protected $fillable=['name','description','display_name'];

    public function Role()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}