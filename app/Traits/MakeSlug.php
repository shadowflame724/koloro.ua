<?php
/**
 * Created by PhpStorm.
 * User: Marketolog10
 * Date: 26.04.2017
 * Time: 18:33
 */

namespace App\Traits;
trait MakeSlug
{
    protected function makeslug($request)
    {
        $slug = str_slug($request->name);
        $request['slug'] = $slug;
    }
}