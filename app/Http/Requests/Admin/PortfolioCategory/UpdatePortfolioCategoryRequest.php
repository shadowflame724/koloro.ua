<?php

namespace App\Http\Requests\Admin\PortfolioCategory;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UpdatePortfolioCategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('portfoliocategory-edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_ru' => 'required|max:150',
            //'name_ua' => 'required|max:150',
            'description_ru' => 'required|max:255',
            //'description_ua' => 'required|max:255',

            'meta.title_ru' => 'required|max:255',
            'meta.description_ru' => 'required|max:255',
            'meta.keywords_ru' => 'required|max:255'
        ];
    }
}
