<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'price'=>'required',
            'distance'=>'required',
            'date'=>'required',
            'marque_id'=>'required',
            'region_id'=>'required',
            'country_id'=>'required',
            'user_id'=>'required',
        ];
    }
}
