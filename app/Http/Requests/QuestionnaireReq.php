<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionnaireReq extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'purpose_survey' => 'required',
            'state_of_health' => 'required',
            'name_medicine' => 'required',
            'purpose_admission' => 'required',
            'questionnaire.*' => 'required',
            'questionnaire2.*' => 'required',
        ];
    }
}
