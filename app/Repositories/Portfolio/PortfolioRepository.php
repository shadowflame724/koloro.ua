<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 15.09.2017
 * Time: 15:20
 */

namespace App\Repositories\Portfolio;

use App\Http\Controllers\FileController;
use App\Http\Controllers\MetaController;
use App\Models\File;
use App\Models\Meta;
use App\Models\Portfolio;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiceRepository
 * @package App\Repositories\Service
 */
class PortfolioRepository extends BaseRepository

{
    /**
     * Associated Repository Model.
     */
    const MODEL = Portfolio::class;


    public function getForDataTables()
    {
        return DB::table('portfolio')
            ->select();
    }

    /**
     * @param array $input
     *
     * @return bool
     */
    public function create(array $input)
    {
        DB::transaction(function () use ($input) {
            $portfolio = self::MODEL;
            $portfolio = new $portfolio();
            $portfolio->title_ru = strip_tags($input['title_ru']);
            $portfolio->title_ua = strip_tags($input['title_ua']);
            $portfolio->short_desc_ru = strip_tags($input['short_desc_ru']);
            $portfolio->short_desc_ua = strip_tags($input['short_desc_ua']);
            $portfolio->text_ru = strip_tags($input['text_ru']);
            $portfolio->text_ua = strip_tags($input['text_ua']);
            $portfolio->on_main_page = $input['on_main_page'];
            $portfolio->bg_color = $input['bg_color'];

            $portfolio->meta_id = MetaController::createMeta($input['meta']);
            if ($input['slug'] != null) {
                $slug = $input['slug'];
            } else {
                $slug = str_slug($input['title_ru']);
            }
            $slug_info = new \SplFileInfo($slug);

            if ($slug_info->getExtension() != 'html') {
                $portfolio->slug = $slug . '.html';
            } else {
                $portfolio->slug = $slug;
            }
            $portfolio->category_ids = implode(',', $input['category_ids']);
            if (isset($input['image'])) {
                $image = FileController::uploadImg($input['image'], public_path('files/images/portfolio/'));
                $portfolio->image_id = $image->id;
                if ($input['image_alt'] != null) {
                    $image->alt = $input['image_alt'];
                    $image->save();
                }
            }

            if ($portfolio->save()) {
                return true;
            }
            return false;
        });
    }

    /**
     * @param Portfolio $portfolio
     * @param  $input
     *
     * @return bool
     */
    public function update(Portfolio $portfolio, array $input)
    {
        $portfolio->title_ru = strip_tags($input['title_ru']);
        $portfolio->title_ua = strip_tags($input['title_ua']);
        $portfolio->short_desc_ru = strip_tags($input['short_desc_ru']);
        $portfolio->short_desc_ua = strip_tags($input['short_desc_ua']);
        $portfolio->text_ru = strip_tags($input['text_ru']);
        $portfolio->text_ua = strip_tags($input['text_ua']);
        $portfolio->title_ru = strip_tags($input['title_ru']);
        $portfolio->on_main_page = $input['on_main_page'];
        $portfolio->category_ids = implode(',', $input['category_ids']);
        $portfolio->bg_color = $input['bg_color'];

        $meta = MetaController::updateMeta($portfolio->meta_id, $input['meta']);
        if($meta instanceof Meta){
            $portfolio->meta_id = $meta->id;
        }

        if ($input['slug'] != null) {
            $slug = $input['slug'];
        } else {
            $slug = str_slug($input['title_ru']);
        }
        $slug_info = new \SplFileInfo($slug);

        if ($slug_info->getExtension() != 'html') {
            $portfolio->slug = $slug . '.html';
        } else {
            $portfolio->slug = $slug;
        }
        if (isset($input['image'])) {
            $res = FileController::updateImg($input['image'], $portfolio->image_id, public_path('files/images/portfolio/'));

            if ($res instanceof File) {
                $portfolio->image_id = $res->id;
            }
        }
        if ($input['image_alt'] != null AND $portfolio->image_id != null) {
            $file = File::find($portfolio->image_id);
            $file->alt = $input['image_alt'];
            $file->save();
        }

        if ($portfolio->save()) {
            return true;
        }
        return false;

    }

}