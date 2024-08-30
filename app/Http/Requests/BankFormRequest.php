<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BankFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'numero' => ['unique:banks,number', 'size:3'],
            'nome' => ['required', 'unique:banks,name'],
            'sigla' => ['required', 'min:2', 'max:4']
        ];        
        
        if(request()->isMethod('put')){
            $bank = $this->route()->parameter('bank');
            $rules['numero'] = [
                'size:3',
                Rule::unique('banks', 'id')->ignore($bank)
            ];
            $rules['nome'] = [
                'required',
                Rule::unique('banks', 'id')->ignore($bank)
            ];
        }

        return $rules;
    }
}
