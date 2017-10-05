<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 26.09.2017
 * Time: 9:39
 */

namespace App\Http\Requests\ServiceVideo;


use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class StoreServiceVideoRequest
 * @package App\Http\Requests\ServiceVideo
 */
class StoreServiceVideoRequest extends Request
{

    /**
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('servicevideo-create');
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime',
            'work_count' => '',
            'service_id' => 'required'
        ];
    }
}