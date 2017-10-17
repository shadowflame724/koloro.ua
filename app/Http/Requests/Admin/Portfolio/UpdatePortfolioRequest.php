<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 20.09.2017
 * Time: 17:27
 */

namespace App\Http\Requests\Admin\Portfolio;


use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UpdatePortfolioRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('portfolio-edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_ru' => 'required',
            'short_desc_ru' => 'required',
//            'text_ru' => 'required',
//
//            'title_ua' => 'required',
//            'short_desc_ua' => 'required',
//            'text_ua' => 'required',
            'bg_color' => 'required',

            'category_ids.*' => 'required',
            'image' => 'image|mimes:jpg,jpeg,bmp,png', //,ratio=16/9
//
            'meta.title_ru' => 'required|max:255',
            'meta.description_ru' => 'required|max:255',
            'meta.keywords_ru' => 'required|max:255'
        ];
    }
}