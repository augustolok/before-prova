<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JogadorRequest extends FormRequest
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
            'Nome'=>'required|min:10',
            'CPF'=>'required|min:10|max:11',
            'Numerodacamiseta'=>'required|min:1'
        ];
    }
     public function messages(){
        return [
            'Nome.required'=>'Campo nome é obrigatório!',
            'CPF.required'=>'Campo nome é obrigatório!',
            'Numerodacamiseta.required'=>'Campo nome é obrigatório!'
        ];
     }
}
