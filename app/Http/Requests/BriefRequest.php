<?php
/**
 * Created by PhpStorm.
 * User: Marketolog10
 * Date: 04.05.2017
 * Time: 11:10
 */

namespace App\Http\Requests;


class BriefRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'wishes' => 'required',
            'files.*' => ['max:20000','mimes:x3*,txt,pdf,docx,doc,xls,jp*,png,gif,bpm,psd,cdr,jpeg'],
//            'money_min' => 'nullable',
        ];
    }
}