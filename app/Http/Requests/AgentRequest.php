<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'fonction' => 'required|string',
            'institution' => 'required|string',
            'direction_id' => 'required',
            'unite_id' =>'required',
            'telephone' => 'required|unique:agents|max:255',
            'email' => 'required|unique:agents|email|max:255',
        ];
    }
}
