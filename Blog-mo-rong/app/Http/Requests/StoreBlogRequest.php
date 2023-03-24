<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *inate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $roles = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required',
        ];
        return $roles;
    }
    public function messages(){
        $messages = [
            'title.required' => 'vui long nhap tieu de',
            'category_id.required' => 'vui long nhap danh muc',
            'description.required' => 'vui long nhap mo ta',
        ];
        return $messages;
    }
     // Xu ly voi api
     public function failedValidation(Validator $validator)
     {
         throw new HttpResponseException(response()->json([
             'success'   => false,
             'message'   => 'Validation errors',
             'data'      => $validator->errors()
         ]));
     }
}
