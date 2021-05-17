<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class RequestWareHouse extends FormRequest
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
            'name' => ['required', 'string','10'],
            'imei' => 'required',
            'color' => 'required',
            'memory' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Trường name là bắt buộc',
            'imei.required'=>'Trường name là bắt buộc',
            'color.required'=>'Trường name là bắt buộc',
            'memory.required'=>'Trường name là bắt buộc',
            'name.required'=>'Trường name là bắt buộc',
        ];
    }
}
