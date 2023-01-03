<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class registerAStoreRequest extends FormRequest
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
            //rule tngok database form
            'name' => ['required'],
            'email' => ['required'],
            'gender' => ['required'],
            'phone_number' => ['required'],
            'ic_number' => ['required'],
            'address' => ['required'],
            'package_id' => ['required', Rule::exists('packages', 'id')]
        ];
    }
}
