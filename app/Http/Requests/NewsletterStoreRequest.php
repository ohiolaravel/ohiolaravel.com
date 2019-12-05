<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterStoreRequest extends FormRequest
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
            'confirm' => 'present|max:0',
            'email' => 'email|required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please provide an email address',
            'email.email' => 'Please double check your email address',
            'confirm.present' => 'Whoops, we couldn\'t sign you up, sorry',
            'confirm.max' => 'Whoops, we couldn\'t sign you up, sorry',
        ];
    }
}
