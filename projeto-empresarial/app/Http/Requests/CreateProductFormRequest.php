<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductFormRequest extends FormRequest
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
        $id = $this->id ??'';

      if($this->method('PUT')  || $this->method('POST'))
      {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:50',
                'min:3',
            ],

            'description' => [
                'required',
            ],

            'quantity' => [
                'required',
                'max:20',
                'min:1',
            ],

            'price' => [
                'required',
                'max:8',
                'min:2',
            ],

            'saleprice' => [
                'required',
                'max:8',
                'min:2',
            ],

            'image' => [
                'file',
                'mimes:jpeg,png,jpg,gif,svg',
            ],

        ];
      }

      return $rules;
    }
}
