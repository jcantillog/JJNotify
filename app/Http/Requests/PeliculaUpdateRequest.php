<?php

namespace JJNotify\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaUpdateRequest extends FormRequest
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
            'path' => 'required',
            'cast' => 'required',
            'name' => 'required',
            'direction' => 'required',
            'duration' => 'required',
        ];
    }
}
