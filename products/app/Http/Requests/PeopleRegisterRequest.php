<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // 'role_id' => ['required'],
            // 'name_people' => ['required|max:30'],
            // 'first_name' => ['required|max:25'],
            // 'kind' => ['required|max:30'],
            // 'age' => ['required'],
            // 'common' =>['required|max:35'],
            // 'piece' => ['required|max:50'],
            // 'avenue' => ['required'],
            // 'number' => ['required'],
        ];
    }
}
