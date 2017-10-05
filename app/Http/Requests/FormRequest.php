<?php
/**
 * Created by PhpStorm.
 * User: Marketolog10
 * Date: 03.05.2017
 * Time: 15:30
 */

namespace App\Http\Requests;


class FormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user-name' => 'required',
            'user-email' => 'email',
            'user-tel' => 'required',
            'user-text' => 'required',
            'user-files.*' => ['max:20000', 'mimes:x3*,txt,pdf,docx,doc,xls,jp*,png,gif,bpm,psd,cdr,jpeg'],
        ];

    }
}