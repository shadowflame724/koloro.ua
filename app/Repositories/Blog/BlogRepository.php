<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 20.09.2017
 * Time: 17:51
 */

namespace App\Repositories\Blog;


use App\Http\Controllers\FileController;
use App\Http\Controllers\MetaController;
use App\Models\Blog;
use App\Models\File;
use App\Models\Meta;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class BlogRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Blog::class;

    public function getForDataTable()
    {
        return DB::table('blog')
            ->join('blogcategory', 'blog.category_id', '=', 'blogcategory.id')
            ->select('blog.*', 'blogcategory.name_ru as parentName', 'blogcategory.slug as parentSlug');
    }

    /**
     * @param array $input
     *
     * @return bool
     */
    public function create(array $input)
    {
        DB::transaction(function () use ($input) {
            $blog = self::MODEL;
            $blog = new $blog();
            $blog->category_id = $input['category_id'];
            $blog->user_id = $input['user_id'];
            $blog->name_ru = strip_tags($input['name_ru']);
            $blog->name_ua = strip_tags($input['name_ua']);
            $blog->description_ru = clean($input['description_ru']);
            $blog->description_ua = clean($input['description_ua']);
            $blog->content_ru = clean($input['content_ru']);
            $blog->content_ua = clean($input['content_ua']);


            if (isset($input['image'])) {
                $dbImage = FileController::uploadImg($input['image'], public_path('files/images/blog/'));

                $blog->image_id = $dbImage->id;
            }

            $slug = str_slug($input['name_ru']);
            $blog->slug = $slug;

            $blog->meta_id = MetaController::createMeta($input['meta']);

            if ($blog->save()) {

                return true;
            }
            return false;
        });
    }

    /**
     * @param Blog $blog
     * @param  $input
     *
     * @return bool
     */
    public function update(Blog $blog, array $input)
    {
        $blog->category_id = $input['category_id'];
        $blog->user_id = $input['user_id'];
        $blog->name_ru = strip_tags($input['name_ru']);
        $blog->name_ua = strip_tags($input['name_ua']);
        $blog->description_ru = clean($input['description_ru']);
        $blog->description_ua = clean($input['description_ua']);
        $blog->content_ru = clean($input['content_ru']);
        $blog->content_ua = clean($input['content_ua']);

        $slug = str_slug($input['name_ru']);
        $blog->slug = $slug;

        $meta = MetaController::updateMeta($blog->meta_id, $input['meta']);
        if ($meta instanceof Meta) {
            $blog->meta_id = $meta->id;
        }

        if (isset($input['image'])) {
            $file = FileController::updateImg($input['image'], $blog->image_id, public_path('files/images/blog/'));
            if ($file instanceof File) {
                $blog->image_id = $file->id;
            }
        }

        DB::transaction(function () use ($blog, $input) {
            if ($blog->save()) {

                return true;
            }
            return false;
        });
    }

    public function delete(Blog $blog)
    {
        DB::transaction(function () use ($blog) {
            $imageId = $blog->image_id;
            $metaId = $blog->meta_id;

            if ($blog->delete()) {
                Meta::destroy($metaId);
                $path = public_path('files/images/blog/');
                if ($imageId != null) {
                    FileController::deleteImg($imageId, $path);
                }

                return true;
            }
            return false;
        });
    }

}