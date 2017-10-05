<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 26.04.2017
 * Time: 21:37
 */

namespace App\Traits;


use App\Models\Meta;

trait SaveMeta
{
    protected function savemetacategory($request)
    {
        $meta_data = new Meta([
            'title' => $request->meta_title,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
            'canonical' => $request->meta_canonical,
        ]);
        $meta_data->save();

        //save meta_id to blog_table
        $meta_id = $meta_data->id;
        $request['meta_id'] = $meta_id;
    }
}