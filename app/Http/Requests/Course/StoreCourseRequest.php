<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:courses,name',
            'description' => 'nullable|string|max:1000',
            'duration' => 'required|string|max:100',
            'fee' => 'required|numeric|min:0',
        ];
    }
}