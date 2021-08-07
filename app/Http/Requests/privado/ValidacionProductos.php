<?php

namespace App\Http\Requests\privado;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProductos extends FormRequest
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
            'prod_nombre'=>'required|max:20',
            'prod_categoria'=>'required|max:15',
            'prod_descripcion'=>'required|max:45',
            'prod_cantidad'=>'required|numeric',
        ];
    }
}
