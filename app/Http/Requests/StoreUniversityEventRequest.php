<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUniversityEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can("insert event");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_from' => 'required',
            'date_to' => 'required',
            'description' => 'required',
            'name'=> 'required|max:255',
            'featured'=> 'nullable',
            'image' => 'nullable|file|max:500'
        ];
    }
}
