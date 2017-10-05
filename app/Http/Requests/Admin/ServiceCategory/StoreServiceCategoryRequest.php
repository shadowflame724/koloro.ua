<?php

namespace App\Http\Requests\Admin\ServiceCategory;

use App\Http\Requests\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Zizaco\Entrust\Entrust;

class StoreServiceCategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('servicecategory-edit');
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
            'name_ua' => 'required|max:255',
            'description_ru' => 'required',
            'description_ua' => 'required'
        ];
    }
}
