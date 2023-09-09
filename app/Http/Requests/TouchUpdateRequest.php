<?php

namespace App\Http\Requests;

use App\Models\TouchSubject;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TouchUpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'touch_subject_id' => 'in:' . TouchSubject::all()->pluck('id')->toArray(),
            'name' => 'min:3|max:50',
            'email' => 'email',
            'website' => '',
            'details' => 'min:3|max:255'
        ];
    }
}
