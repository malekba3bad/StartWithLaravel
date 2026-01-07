<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
     public function rules(): array
    {
        return [
            'name' => 'required',
            'country_id' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:students,email',
            'nationalID' => 'required',
            'active' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب',
            // 'name.min' => 'حقل الاسم يجب أن يكون على الأقل 3 حروف',
            // 'name.max' => 'حقل الاسم يجب ألا يتجاوز 50 حرفًا',
            'country_id.required' => 'حقل الدولة مطلوب',
            'phone.required' => 'حقل أرقام الهواتف مطلوب',
            'nationalID.required' => 'حقل الرقم القومي مطلوب',
            'active.required' => 'حقل الحالة مطلوب',
            // 'active.in' => 'الحالة يجب أن تكون 0 أو 1',
        ];
    }
}
