<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InvoiceRequest extends Request
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
            'vat_regi'      => 'required',
            'product_list'  => 'required',
            'product_cost'  => 'required',
            'total_vat'     => 'required',
            'total_amount'  => 'required'
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
