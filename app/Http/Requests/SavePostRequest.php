<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
        /*
        if ($this->isMethod('PATCH')) {
            return [
                'title' => ['required', 'min:8'],
                'content' => ['required', 'min:4']
            ];
        }
        */

        // php artisan make:request SavePostRequest
        //
        //
        //
        //

        return [
            'title' => ['required', 'min:4'],
            'content' => ['required', 'min:4']
        ];
    }
}
