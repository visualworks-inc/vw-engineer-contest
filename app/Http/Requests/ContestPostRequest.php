<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContestPostRequest extends FormRequest
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
            'name' => ['required','string','max:20'],
            'reason' => ['required','string','max:255'],
            'language' => ['required','string','max:20'],
        ];
    }
}
