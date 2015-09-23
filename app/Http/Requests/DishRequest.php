<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DishRequest extends Request
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
            'name' => 'required|string',
            'category_id' => 'required|integer',
            'description_es' => 'required',
            'description_en' => 'required',
            'img_url' => 'required|image',
            'price' => 'required|numeric',
            'measure' => 'required|string',
            'prep_time' => 'required|numeric'
        ];
    }
}
