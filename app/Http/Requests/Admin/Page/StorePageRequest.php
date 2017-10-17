<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 20.09.2017
 * Time: 17:26
 */

namespace App\Http\Requests\Admin\Page;


use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class StorePageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('page-edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_ru' => 'required',

            'meta.title_ru' => 'required|max:255',
            'meta.description_ru' => 'required|max:255',
            'meta.keywords_ru' => 'required|max:255',
        ];
    }
}