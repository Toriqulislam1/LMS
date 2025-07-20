<?php

namespace App\Modules\provider\course\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Allow all users for now. You can add logic to restrict.
        return true;
    }

    public function rules(): array
    {
        return [
            'title'             => 'required|string|max:100',
            'sub_title'         => 'nullable|string|max:100',
            'price'             => 'required|numeric|min:0',
            'start_date'        => 'nullable',
            'thumbnail'         => 'required|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
            'short_description' => 'nullable|string|max:500',
            'discount'          =>'nullable',
            'description'       => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'     => 'Course title is required.',
            'price.required'     => 'Price is required.',
            'thumbnail.required' => 'Thumbnail image is required.',
            'thumbnail.image'    => 'Thumbnail must be an image.',
            'thumbnail.mimes'    => 'Only jpg, jpeg, png formats are allowed.',
        ];
    }
}
