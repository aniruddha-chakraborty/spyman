<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GeneralComplainRequest extends Request
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
            'complainer_name' => 'required',
            'complainer_mobile' => 'required',
            'institute_name' => 'required',
            'address' => 'required',
            'complain' => 'required',
            'complain_type' => 'required'
        ];
    }

    /**
     * Retrun the error as json data
     *
     * @return array
     */
    public function response(array $errors)
    {
        return response()->json(['message' => $errors, 'status_code' => 422], 422);
    }
}
