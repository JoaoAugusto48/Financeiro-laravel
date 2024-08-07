<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountFormRequest extends FormRequest
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
            'banco' => ['required'],
            'titular' => ['required'],
            'numeroConta' => ['required'],
            'saldoAtual' => ['required'],
        ];

        if(request()->isMethod('put')){
            $rules['banco'] = [];
            $rules['titular'] = [];
            $rules['saldoAtual'] = [];
        }
        
        return $rules;
    }
}
