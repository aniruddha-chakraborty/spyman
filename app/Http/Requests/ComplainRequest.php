<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ComplainRequest extends Request
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
            'complainer_name' => 'alpha',
            'complainer_mobile' => 'required',
            'token_id' => 'required',
            'vat_reg_id' => 'required',
            'institute_name' => 'alpha',
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
