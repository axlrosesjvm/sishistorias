<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EscenaFormRequest extends Request
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
            //
             'imagen'=>'mimes:jpeg,bmp,png',
            'titulo'=>'required|max:99',
            'condicion'=>'max:7',
            'condiciontexto'=>'max:199'    
        ];
    }
}
