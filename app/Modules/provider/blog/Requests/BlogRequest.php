<?php

namespace App\Modules\provider\blog\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Allow all users for now. You can add logic to restrict.
        return true;
    }

    public function rules(): array
    {
        return [
            'title'             => 'required|string|max:200',
            'sub_title'         => 'nullable|string|max:100',
            'thumbnail_blog'         => 'required|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
            'feature_blog'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
            'description'       => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'     => 'Blog title is required.',
            'thumbnail.required' => 'Thumbnail image is required.',
            'thumbnail.image'    => 'Thumbnail must be an image.',
            'thumbnail.mimes'    => 'Only jpg, jpeg, png formats are allowed.',
        ];
    }
}
