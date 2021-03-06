<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateProfileRequest extends Request
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
            'fullname'  => 'required|regex:/^[A-Za-z \t]*\p{L}+/i|max:100|min:3',
            'phone'     => 'required|regex:/^[0-9]*$/i|max: 14|min:10',
            'address'   => 'required|regex:/^[.,\-\/A-Za-z0-9 \t]*\p{L}+/i|max: 100|min:6',
            'birthday'  => 'required|date',
            'image'     => 'mimes:jpeg,jpg,png'
        ];
    }
}
