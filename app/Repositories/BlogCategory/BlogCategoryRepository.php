<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 15.09.2017
 * Time: 15:20
 */

namespace App\Repositories\BlogCategory;

use App\Events\DbChanged;
use App\Http\Controllers\MetaController;
use App\Models\BlogCategory;
use App\Models\Meta;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiceRepository
 * @package App\Repositories\Service
 */
class BlogCategoryRepository extends BaseRepository

{
    /**
     * Associated Repository Model.
     */
    const MODEL = BlogCategory::class;

    /**
     * @return array|static[]
     */
    public function getForDataTables()
    {
        return DB::table('blogcategory')
            ->get();
    }

    /**
     * @param array $input
     *
     * @return bool
     */
    public function create(array $input)
    {
        DB::transaction(function () use ($input) {
            $blogCategory = self::MODEL;
            $blogCategory = new $blogCategory();
            $blogCategory->name_ru = strip_tags($input['name_ru']);
            $blogCategory->name_ua = strip_tags($input['name_ua']);
            $blogCategory->meta_id = MetaController::createMeta($input['meta']);
            $slug = str_slug($input['name_ru']);
            $blogCategory->slug = $slug;


            if ($blogCategory->save()) {
                new DbChanged();

                return true;
            }
            return false;
        });
    }

    /**
     * @param BlogCategory $blogCategory
     * @param  $input
     *
     * @return bool
     */
    public function update(BlogCategory $blogCategory, array $input)
    {
        $blogCategory->name_ru = strip_tags($input['name_ru']);
        $blogCategory->name_ua = strip_tags($input['name_ua']);
        $meta = MetaController::updateMeta($blogCategory->meta_id, $input['meta']);
        if($meta instanceof Meta){
            $blogCategory->meta_id = $meta->id;
        }
        $slug = str_slug($input['name_ru']);
        $blogCategory->slug = $slug;

        if ($blogCategory->save()) {
            new DbChanged();

            return true;
        }
        return false;

    }

}