<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 15.09.2017
 * Time: 15:20
 */

namespace App\Repositories\Service;

use App\Http\Controllers\FileController;
use App\Http\Controllers\MetaController;
use App\Models\File;
use App\Models\Meta;
use App\Models\Service;
use App\Models\ServiceBlocks;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiceRepository
 * @package App\Repositories\Service
 */
class ServiceRepository extends BaseRepository

{
    /**
     * Associated Repository Model.
     */
    const MODEL = Service::class;

    public function getForDataTables()
    {
        return DB::table('service')
            ->join('servicecategory', 'service.category_id', '=', 'servicecategory.id')
            ->select('service.*', 'servicecategory.name_ru as parentName_ru', 'servicecategory.name_ua as parentName_ua')
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
            $service = self::MODEL;
            $service = new $service();
            $service->category_id = $input['category_id'];
            $service->name_ru = strip_tags($input['name_ru']);
            $service->name_ua = strip_tags($input['name_ua']);
            $service->name_parent_case_ru = strip_tags($input['name_parent_case_ru']);
            $service->name_parent_case_ua = strip_tags($input['name_parent_case_ua']);
            $service->description_ru = strip_tags($input['description_ru']);
            $service->description_ua = strip_tags($input['description_ua']);
            $service->price = $input['price'];
            $service->time_ru = $input['time_ru'];
            $service->time_ua = $input['time_ua'];
            $service->price_depends_ru = json_encode($input['price_depends_ru']);
            $service->price_depends_ua = json_encode($input['price_depends_ua']);
            $service->blog_ids = implode(',', $input['blog_ids']);
            if (isset($input['image'])) {
                $dbImage = FileController::uploadTwoSizeImg($input['image'], public_path('files/images/service/'), 480, 480);

                //$dbImage = FileController::uploadImg($input['image'], public_path('files/images/service/'));
                $dbImage->alt = $input['image_alt'];
                $dbImage->save();
                $service->image_id = $dbImage->id;
            }


            if ($input['slug'] != null) {
                $slug = $input['slug'];
            } else {
                $slug = str_slug($input['name_ru']);
            }
            $slug_info = new \SplFileInfo($slug);

            if ($slug_info->getExtension() != 'html') {
                $service->slug = $slug . '.html';
            } else {
                $service->slug = $slug;
            }
            $service->meta_id = MetaController::createMeta($input['meta']);

            if ($service->save()) {
                $serviceId = $service->id;

                /*
                * Start Blocks management
                */
                ksort($input['blocks']);

                foreach ($input['blocks'] as $key => $block) {
                    $imageIds = [];
                    if ($key == 1) {
                        foreach ($block as $item) {
                            if ($item['image'] != null) {
                                $dbImage = FileController::uploadImg($item['image'], public_path('files/images/service-page/'));
                                $dbImage->title_ru = $item['title_ru'];
                                $dbImage->title_ua = $item['title_ua'];
                                $dbImage->alt = $item['image_alt'];
                                $dbImage->save();
                                array_push($imageIds, $dbImage->id);
                            }
                        }
                    } elseif ($key == 3) {
                        foreach ($block['image'] as $image) {
                            if ($image != null) {
                                $dbImage = FileController::uploadImg($image, public_path('files/images/service-page/'));
                                array_push($imageIds, $dbImage->id);
                            }
                        }
                    }

                    ServiceBlocks::create([
                        'service_id' => $serviceId,
                        'sort' => $key,
                        'title_ru' => isset($block['title_ru']) ? $block['title_ru'] : null,
                        'title_ua' => isset($block['title_ua']) ? $block['title_ua'] : null,
                        'content_ru' => isset($block['content_ru']) ? $block['content_ru'] : null,
                        'content_ua' => isset($block['content_ua']) ? $block['content_ua'] : null,
                        'image_ids' => implode(',', $imageIds)
                    ]);
                }

                /*
                * End Blocks management
                */

                return true;
            }
            return false;
        });
    }

    /**
     * @param Service $service
     * @param  $input
     *
     * @return bool
     */
    public function update(Service $service, array $input)
    {

        $service->category_id = $input['category_id'];
        $service->name_ru = strip_tags($input['name_ru']);
        $service->name_ua = strip_tags($input['name_ua']);
        $service->name_parent_case_ru = strip_tags($input['name_parent_case_ru']);
        $service->name_parent_case_ua = strip_tags($input['name_parent_case_ua']);
        $service->description_ru = clean($input['description_ru']);
        $service->description_ua = clean($input['description_ua']);
        $service->price = $input['price'];
        $service->time_ru = $input['time_ru'];
        $service->time_ua = $input['time_ua'];
        $service->price_depends_ru = json_encode($input['price_depends_ru']);
        $service->price_depends_ua = json_encode($input['price_depends_ua']);
        $service->blog_ids = implode(',', $input['blog_ids']);

        if ($input['slug'] != null || $input['slug'] != '') {
            $slug = $input['slug'];
        } else {
            $slug = str_slug($input['name_ru']);
        }

        $slug_info = new \SplFileInfo($slug);

        if ($slug_info->getExtension() != 'html') {
            $service->slug = $slug . '.html';
        } else {
            $service->slug = $slug;
        }

        $meta = MetaController::updateMeta($service->meta_id, $input['meta']);
        if ($meta instanceof Meta) {
            $service->meta_id = $meta->id;
        }

        if (isset($input['image'])) {
            FileController::updateImg($input['image'], $service->image_id, public_path('files/images/service/'), 480, 480);
        }
        if ($input['image_alt'] != null) {
            $dbImage = File::find($service->image_id);
            $dbImage->alt = $input['image_alt'];
            $dbImage->save();
        }

        DB::transaction(function () use ($service, $input) {
            if ($service->save()) {

                /*
                * Start Blocks management
                */
                ksort($input['blocks']);

                foreach ($input['blocks'] as $key => $block) {
                    $oldBlock = ServiceBlocks::find($block['id']);
                    $imageIds = explode(',', $oldBlock->image_ids);

                    if ($key == 1 || $key == 3) {
                        if (isset($block['image_ids'])) {
                            $diffArr = array_diff($imageIds, explode(',', $block['image_ids']));
                        }
                        if (isset($diffArr) AND !empty($diffArr)) {
                            foreach ($diffArr as $imgId) {
                                if (!empty($imgId)) {
                                    $imgPath = public_path('files/images/service-page/');
                                    FileController::deleteImg($imgId, $imgPath);
                                }
                            }
                        }
                    }

                    if ($key == 1) {
                        foreach (array_slice($block, 2) as $item) {
                            if ($item['image'] != null) {
                                $dbImage = FileController::uploadImg($item['image'], public_path('files/images/service-page/'));
                                $dbImage->title_ru = $item['title_ru'];
                                $dbImage->title_ua = $item['title_ua'];
                                $dbImage->alt = $item['image_alt'];
                                $dbImage->save();
                                array_push($imageIds, $dbImage->id);
                            }
                        }
                    } elseif ($key == 3) {

                        foreach ($block['image'] as $image) {
                            if ($image != null) {
                                $dbImage = FileController::uploadImg($image, public_path('files/images/service-page/'));
                                array_push($imageIds, $dbImage->id);
                            }
                        }
                    }

                    $oldBlock->sort = $key;
                    $oldBlock->title_ru = isset($block['title_ru']) ? $block['title_ru'] : null;
                    $oldBlock->title_ua = isset($block['title_ua']) ? $block['title_ua'] : null;
                    $oldBlock->content_ru = isset($block['content_ru']) ? $block['content_ru'] : null;
                    $oldBlock->content_ua = isset($block['content_ua']) ? $block['content_ua'] : null;
                    $oldBlock->image_ids = implode(',', $imageIds);
                    $oldBlock->save();

                }

                return true;
            }
            return false;
        });
    }

    public function delete(Service $service)
    {
        DB::transaction(function () use ($service) {
            $imageId = $service->image_id;
            $metaId = $service->meta_id;
            $blocks = $service->blocks;

            if ($service->delete()) {
                Meta::destroy($metaId);
                $path = public_path('files/images/service/');
                if ($imageId != null) {
                    FileController::deleteImg($imageId, $path);
                }
                foreach ($blocks as $block) {
                    $path = public_path('files/images/service-page/');
                    $images = File::whereIn('id', explode(',', $block->image_ids))->get();
                    foreach ($images as $image) {
                        FileController::deleteImg($image->id, $path);
                    }
                    $block->delete();
                }

                return true;
            }
            return false;
        });
        return false;
    }

}