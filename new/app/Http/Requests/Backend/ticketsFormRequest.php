<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ticketsFormRequest extends FormRequest
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
            // 'name'  => 'required',
                    // 'id'  => 'required',
        // 'name'  => 'required',
        // 'ticket'  => 'required',
        // 'created_at'  => 'required',
        // 'updated_at'  => 'required',

        ];
    }
}
