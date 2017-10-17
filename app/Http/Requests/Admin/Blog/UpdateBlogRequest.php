<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 20.09.2017
 * Time: 17:27
 */

namespace App\Http\Requests\Admin\Blog;


use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UpdateBlogRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('blog-edit');
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
            'description_ru' => 'required',
            'content_ru' => 'required',
            'name_ua' => '',
            'description_ua' => '',
            'content_ua' => '',
            'user_id' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpg,jpeg,bmp,png',

            'meta.title_ru' => 'required|max:255',
            'meta.description_ru' => 'required|max:255',
            'meta.keywords_ru' => 'required|max:255',
        ];
    }
}