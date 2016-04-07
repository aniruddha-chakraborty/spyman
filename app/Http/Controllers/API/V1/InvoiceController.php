<?php

namespace App\Http\Controllers\API\V1;

use App\Models\API\V1\InvoiceModel;
use Illuminate\Http\Request;

use App\Http\Requests\InvoiceRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    protected $invoice_table;

    public function __construct()
    {
        $this->invoice_table = new InvoiceModel;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
        $message = []; // empty array

        try {
            $token_id = str_shuffle("Token_ID");;

            $this->invoice_table->vat_regi = $request->vat_regi;
            $this->invoice_table->product_list = $request->product_list;
            $this->invoice_table->product_cost = $request->product_cost;
            $this->invoice_table->total_vat = $request->total_vat;
            $this->invoice_table->total_amount = $request->total_amount;
            $this->invoice_table->token_id = $token_id;
            $result = $this->invoice_table->save();

            if($result) {
                // set the message
                $message['message'] = 'Your invoice store into our database. Please collect the token number : '.$token_id;
                $message['status_code'] = 201;
            } else{
                // set the message
                $message['message'] = 'Your invoice can not store into our database!';
                $message['status_code'] = 422;
            }

        } catch(Exception $ex) {
            // set the flash message
            $message['message'] = $ex->getMessage();
            $message['status_code'] = $ex->getCode();

        } finally {
            return response()->json(
                [
                    'message' => $message
                ],
                $message['status_code']
            );
        }
    }

    /**
     * Return vat information by token ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tokenIDCheck($id)
    {
        $invoice = $this->invoice_table->getInvoiceInfo($id);

        if($invoice)
        {
            return response()->json([$invoice], 200);
        } else{
            return response()->json(['message' => 'Token ID doesn\'t match!', 'status_code' => 400], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
