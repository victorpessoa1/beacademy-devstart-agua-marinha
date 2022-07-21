<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCheckoutFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ??'';

        if($this->method('PUT')  || $this->method('POST'))
        {
            $rules = [
                'amount' => [
                    'required'
                ],
                'quantity' => [
                    'required'
                ],
            ];
        }
        return $rules;
    }
}
