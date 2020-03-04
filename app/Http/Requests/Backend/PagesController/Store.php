<?php

namespace App\Http\Requests\Backend\PagesController;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'name' => ['required', 'string', 'max:191'], 
            'des' => ['required', 'min:10'], 
            'meta_des' => ['string','min:10'],
            'meta_key' => ['string','min:10']
        ];
    }
}
