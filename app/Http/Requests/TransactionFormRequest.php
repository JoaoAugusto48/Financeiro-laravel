<?php

namespace App\Http\Requests;

use App\Enums\TransactionEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionFormRequest extends FormRequest
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
            'valor' => ['required', 'numeric', 'gte:0'],
            'tipoTransacao' => ['required', Rule::enum(TransactionEnum::class)],
            'titular' => ['required'],
            'data' => ['required'],
            'descricao' => [''],
            'contaRelacionada' => [''],
        ];
        
        return $rules;
    }
}
