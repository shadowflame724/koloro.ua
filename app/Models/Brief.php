<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $table = 'brief';

//    protected $fillable = ['service','money_min','money_max','currency','time','wishes','name','activity','site','city','phone','email','about'];
    protected $fillable = ['service_name', 'market_strategy', 'money', 'currency', 'time', 'wishes', 'name', 'activity', 'site', 'city', 'phone', 'email', 'about'];

    public function briefServices()
    {
        return $this->belongsToMany('App\Models\BriefService', 'brief_connect_service')
            ->withTimestamps();
    }

    public function briefAbouts()
    {
        return $this->belongsToMany('App\Models\BriefAbout', 'brief_connect_about')
            ->withTimestamps();
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function getCurrencyAttribute($currency)
    {
        switch ($currency) {
            case 1:
                return '&#36;';
                break;
            case 2:
                return '&#8364;';
                break;
            case 3:
                return '&#8372;';
                break;
            case 4:
                return '&#8381;';
                break;
        }
    }
}
