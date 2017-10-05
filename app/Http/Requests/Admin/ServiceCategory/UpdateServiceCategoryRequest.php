<?php

namespace App\Http\Requests\Admin\ServiceCategory;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UpdateServiceCategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $role = DB::table('role_user')->where('user_id', '=', Auth::user()->id)->first();

        if ($role->role_id === 1) return true;
        else return false;
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
