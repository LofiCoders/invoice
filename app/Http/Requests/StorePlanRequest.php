<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('plan_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'price' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:plans,price',
            ],
            'payment_period' => [
                'required',
            ],
            'stripe_plan_id' => [
                'string',
                'nullable',
            ],
        ];
    }
}
