<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewAziendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;       //??
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nome' => 'required|max:25',
            'Sede' => 'required|max:25',
            'Tipologia' => 'required|max:25',
            'RagioneSociale' => 'required|max:25'
        ];
    }
}
