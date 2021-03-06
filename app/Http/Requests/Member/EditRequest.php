<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'birthday'    => 'required|date',
            'qq'          => 'required|string|max:30',
            'phone'       => 'required|string|max:30',
            'email'       => 'required|email',
            'bank'        => 'nullable|string|max:50',
            'bank_number' => 'nullable|string|max:50',
        ];
    }
}
