<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreFeaturePlanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('feature_plan_create');
    }

    public function rules()
    {
        return [
            'plan_id' => [
                'required',
                'integer',
            ],
            'feature_id' => [
                'required',
                'integer',
            ],
            'quota' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
