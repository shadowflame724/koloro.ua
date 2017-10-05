<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioConnectCategory extends Model
{
    protected $table = 'portfolio_connect_category';

    protected $fillable = ['portfolio_category_id','portfolio_id'];
}
