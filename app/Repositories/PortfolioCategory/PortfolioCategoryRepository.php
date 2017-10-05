<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 15.09.2017
 * Time: 15:20
 */

namespace App\Repositories\PortfolioCategory;

use App\Http\Controllers\MetaController;
use App\Models\Meta;
use App\Models\PortfolioCategory;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiceRepository
 * @package App\Repositories\Service
 */
class PortfolioCategoryRepository extends BaseRepository

{
    /**
     * Associated Repository Model.
     */
    const MODEL = PortfolioCategory::class;


    public function getForDataTables()
    {
        return DB::table('portfoliocategory');
    }

    /**
     * @param array $input
     *
     * @return bool
     */
    public function create(array $input)
    {
        DB::transaction(function () use ($input) {
            $portfolioCategory = self::MODEL;
            $portfolioCategory = new $portfolioCategory();
            $portfolioCategory->name_ru = strip_tags($input['name_ru']);
            $portfolioCategory->name_ua = strip_tags($input['name_ua']);
            $portfolioCategory->description_ru = strip_tags($input['description_ru']);
            $portfolioCategory->description_ua = strip_tags($input['description_ua']);
            $portfolioCategory->meta_id = MetaController::createMeta($input['meta']);
            $slug = str_slug($input['name_ru']);
            $portfolioCategory->slug = $slug;


            if ($portfolioCategory->save()) {
                return true;
            }
            return false;
        });
    }

    /**
     * @param PortfolioCategory $portfolioCategory
     * @param  $input
     *
     * @return bool
     */
    public function update(PortfolioCategory $portfolioCategory, array $input)
    {
        $portfolioCategory->name_ru = strip_tags($input['name_ru']);
        $portfolioCategory->name_ua = strip_tags($input['name_ua']);
        $portfolioCategory->description_ru = strip_tags($input['description_ru']);
        $portfolioCategory->description_ua = strip_tags($input['description_ua']);
        $meta = MetaController::updateMeta($portfolioCategory->meta_id, $input['meta']);
        if($meta instanceof Meta){
            $portfolioCategory->meta_id = $meta->id;
        }
        $slug = str_slug($input['name_ru']);
        $portfolioCategory->slug = $slug;

        if ($portfolioCategory->save()) {
            return true;
        }
        return false;

    }

}