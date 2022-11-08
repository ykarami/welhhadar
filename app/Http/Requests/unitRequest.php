<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class unitRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'unitName' => 'required | alpha_num ',
            'company' => 'required | alpha',
            'country' => 'required |alpha',
            'well' => 'required',
            'haspId' => 'required | numeric',
            'destination' => 'required',
            'status' => 'required',
            'jobProfile' => 'required',

        ];
    }
}
