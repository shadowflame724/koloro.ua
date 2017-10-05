<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 26.09.2017
 * Time: 9:50
 */

use App\Repositories\BaseRepository;
use App\Models\ServiceVideo;
use Illuminate\Support\Facades\DB;

class ServiceVideoRepository extends BaseRepository
{
    const MODEL = ServiceVideo::class;
    
    public function getForDataTables()
    {
        return DB::table('servicevideo')->get();
    }
    
    public function create(array $input)
    {
        dd($input);
        DB::transaction(function () use ($input) {
            $serviceVideo = self::MODEL;
            $serviceVideo = new $serviceVideo();
            $serviceVideo->service_id = $input['service_id'];



            if ($serviceVideo->save()) {

                return true;
            }
            return false;
        });
    }

    public function update(ServiceVideo $serviceVideo, array $input)
    {
        $serviceVideo->service_id = $input['service_id'];

        DB::transaction(function () use ($serviceVideo) {

            if ($serviceVideo->save()) {

                return true;
            }
            return false;
        });
    }
}