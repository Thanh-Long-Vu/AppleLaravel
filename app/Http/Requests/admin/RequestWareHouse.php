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
            'name' => 'required',
            'data' => 'required',
            'imei' => 'required',
            'color' => 'required',
            'memory' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ];
    }
}
