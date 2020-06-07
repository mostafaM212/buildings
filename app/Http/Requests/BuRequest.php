<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuRequest extends FormRequest
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
            'bu_name'=>'required|min:5|max:100',
            'bu_price'=>'required|integer',
            'bu_square'=>'required|integer',
            'bu_small_dis'=>'required|min:5|max:160',
            'bu_meta'=>'required',
            'bu_langtuide'=>'required|integer',
            'bu_latitude'=>'required|integer',
            'rooms'=>'required|min:1|max:10|integer',
            'bu_large_dis'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ];
    }
}
