<?php

namespace App;

use App\Models\Blog;
use App\Models\File;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'google', 'post', 'phone', 'about', 'image_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function file()
    {
        return $this->belongsTo(File::class, 'image_id');
    }

    public function role()
    {
        $role = DB::table('role_user')->where('user_id', '=', Auth::user()->id)->first();

        return $role;
    }
}
