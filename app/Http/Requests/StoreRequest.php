<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        'name'=>'required|string|max:250',
        'front_page'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description'=>'nullable',
        'location'=>'required',
        'nit'=>'required|number|',
        'status'=>'required|string|max:250'
        ];
    }
}
