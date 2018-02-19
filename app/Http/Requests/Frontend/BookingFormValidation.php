<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;

class BookingFormValidation extends Request
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
            'name' => 'required',
            'address' => 'required',
            'occassion' => 'required',
            'event' => 'required',
            'total' => 'required',
            'shift' => 'required',
            'hall' => 'required',
            'category' => 'required',
            'menu' => 'required',
        ];
    }
}
