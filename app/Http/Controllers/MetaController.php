<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

use App\Http\Requests;

class MetaController extends Controller
{
    public function index()
    {
        return view('admin.meta.index', compact('meta'));
    }

    public function update(Request $request)
    {

    }

    public static function createMeta(array $input)
    {
        $meta = new Meta([
            'title_ru' => $input['title_ru'],
            'description_ru' => $input['description_ru'],
            'keywords_ru' => $input['keywords_ru'],

            'title_ua' => $input['title_ua'],
            'description_ua' => $input['description_ua'],
            'keywords_ua' => $input['keywords_ua'],

        ]);
        $meta->save();

        return $meta->id;
    }

    public static function updateMeta($metaId, $input)
    {
        $meta = Meta::find($metaId);
        if ($meta != null) {
            $meta->title_ru = $input['title_ru'];
            $meta->description_ru = $input['description_ru'];
            $meta->keywords_ru = $input['keywords_ru'];

            $meta->title_ua = $input['title_ua'];
            $meta->description_ua = $input['description_ua'];
            $meta->keywords_ua = $input['keywords_ua'];

            $meta->save();

            return true;
        } else {
            $meta = Meta::create([
                'title_ru' => $input['title_ru'],
                'description_ru' => $input['description_ru'],
                'keywords_ru' => $input['keywords_ru'],

                'title_ua' => $input['title_ua'],
                'description_ua' => $input['description_ua'],
                'keywords_ua' => $input['keywords_ua'],
            ]);

            return $meta;
        }
    }
}
