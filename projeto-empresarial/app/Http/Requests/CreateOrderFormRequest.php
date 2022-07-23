<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderFormRequest extends FormRequest
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
                'quantity' => [
                    'required'
                ],
            ];
        }
        return $rules;
    }
}
