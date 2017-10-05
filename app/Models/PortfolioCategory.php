<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfoliocategory';

    protected $fillable = ['name', 'urlname', 'description', 'keywords'];
    public $timestamps = false;

    public function portfolio()
    {
        return $this->belongsToMany('App\Models\Portfolio', 'portfolio_connect_category');
    }

    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }
}
