<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientReq extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'type' => 'nullable',
            'foreign_passport' => 'nullable',
            'passport_series' => 'required',
            'passport_number' => 'required',
            'passport_issued' => 'required',
            'passport_d_issue' => 'required',
            'registration.city' => 'required',
            'registration.street' => 'required',
            'registration.house' => 'required',
            'registration.frame' => 'required',
            'registration.quarter' => 'required',
            'residence.city' => 'required',
            'residence.street' => 'required',
            'residence.house' => 'required',
            'residence.frame' => 'required',
            'residence.quarter' => 'required',
        ];
    }
}
