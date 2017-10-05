<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 15.09.2017
 * Time: 15:20
 */

namespace App\Repositories\ServiceCategory;

use App\Http\Controllers\FileController;
use App\Models\ServiceCategory;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiceRepository
 * @package App\Repositories\Service
 */
class ServiceCategoryRepository extends BaseRepository

{
    /**
     * Associated Repository Model.
     */
    const MODEL = ServiceCategory::class;

    /**
     * @return array|static[]
     */
    public function getForDataTables()
    {
        return DB::table('servicecategory')
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
            $serviceCategory = self::MODEL;
            $serviceCategory = new $serviceCategory();
            $serviceCategory->name_ru = strip_tags($input['name_ru']);
            $serviceCategory->name_ua = strip_tags($input['name_ua']);
            $serviceCategory->description_ru = clean($input['description_ru']);
            $serviceCategory->description_ua = clean($input['description_ua']);
            $serviceCategory->order = $input['order'];

//            if (isset($input['image'])) {
//                $imgAlt = isset($input['image_alt']) ? $input['image_alt'] : null;
//                $dbImage = FileController::uploadImg($input['image'], public_path('files/images/servicecategory/'), $imgAlt);
//                $serviceCategory->image_id = $dbImage->id;
//            }

            if ($serviceCategory->save()) {

                return true;
            }
            return false;
        });
    }

    /**
     * @param ServiceCategory $serviceCategory
     * @param  $input
     *
     * @return bool
     */
    public function update(ServiceCategory $serviceCategory, array $input)
    {
        $serviceCategory->name_ru = strip_tags($input['name_ru']);
        $serviceCategory->name_ua = strip_tags($input['name_ua']);
        $serviceCategory->description_ru = clean($input['description_ru']);
        $serviceCategory->description_ua = clean($input['description_ua']);
        $serviceCategory->order = $input['order'];

//        if (isset($input['image'])) {
//            $imgAlt = null;
//            if (isset($input['image_alt'])) {
//                $imgAlt = $input['image_alt'];
//            }
//            $dbImage = FileController::uploadImg($input['image'], public_path('files/images/servicecategory/'), $imgAlt);
//            $serviceCategory->image_id = $dbImage->id;
//        }

        if ($serviceCategory->save()) {
            return true;
        }
        return false;

    }

}