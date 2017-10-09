<?php

namespace App\Http\Requests\Admin\Service;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('service-edit');

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_ru' => 'required|max:255',
            'name_parent_case_ru' => 'required|max:255',
//            'name_parent_case_ua' => 'required|max:255',

            //'name_ua' => 'required|max:255',
            'description_ru' => 'required',
            //'description_ua' => 'required',
            'category_id' => 'required',
            'time_ru' => 'required',
            //'time_ua' => 'required',

            'meta.title_ru' => 'required|max:255',
            'meta.description_ru' => 'required|max:255',
            'meta.keywords_ru' => 'required|max:255',

            'blog_ids' => 'required|max:255',

            'image' => 'image|mimes:jpg,jpeg,bmp,png',
            'price' => 'required|numeric',
            'price_depends_ru.*' => 'required',
            //'price_depends_ua.*' => 'required',

//                'blocks.0.title_ru' => 'required|max:191',
//                //'blocks.0.title_ua' => 'required|max:191',
//                'blocks.0.content_ru' => 'required',
//                //'blocks.0.content_ua' => 'required',

//                'blocks.1.*.title_ru' => 'required|max:191',
//                //'blocks.1.*.title_ua' => 'required|max:191',
            'blocks.1.*.image' => 'image|mimes:jpg,jpeg,bmp,png',

//                'blocks.2.title_ru' => 'required|max:191',
//                //'blocks.2.title_ua' => 'required|max:191',
//                'blocks.2.content_ru' => 'required',
//                //'blocks.2.content_ua' => 'required',
            'blocks.2.image.*' => 'image|mimes:jpg,jpeg,bmp,png',

            'blocks.3.image.*' => 'image|mimes:jpg,jpeg,bmp,png',

//                'blocks.4.title_ru' => 'required|max:191',
//                //'blocks.4.title_ua' => 'required|max:191',
//                'blocks.4.content_ru' => 'required',
//                //'blocks.4.content_ua' => 'required',
            'blocks.4.image.*' => 'image|mimes:jpg,jpeg,bmp,png',

//                'blocks.5.title_ru' => 'required|max:191',
//                //'blocks.5.title_ua' => 'required|max:191',
//                'blocks.5.content_ru' => 'required',
//                //'blocks.5.content_ua' => 'required',
            'blocks.5.image.*' => 'image|mimes:jpg,jpeg,bmp,png',

//                'blocks.6.title_ru' => 'required|max:191',
//                //'blocks.6.title_ua' => 'required|max:191',
//                'blocks.6.content_ru' => 'required',
//               // 'blocks.6.content_ua' => 'required',
            'blocks.6.image.*' => 'image|mimes:jpg,jpeg,bmp,png'
        ];
    }
}
