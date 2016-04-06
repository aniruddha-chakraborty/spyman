<?php

namespace App\Http\Controllers\API\V1;

use App\Models\API\V1\ComplainModel;
use Illuminate\Http\Request;

use App\Http\Requests\ComplainRequest;
use App\Http\Requests\GeneralComplainRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComplainController extends Controller
{
    protected $complain_table;

    public function __construct()
    {
        $this->complain_table = new ComplainModel;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function vatComplain(ComplainRequest $request)
    {
//        echo '<pre>';
//        print_r($request->all());
//        echo '</pre>';

        $message = []; // empty array

        try {
            $this->complain_table->complainer_name = $request->complainer_name;
            $this->complain_table->complainer_mobile = $request->complainer_mobile;
            $this->complain_table->token_id = $request->token_id;
            $this->complain_table->vat_reg_id = $request->vat_reg_id;
            $this->complain_table->institute_name = $request->institute_name;
            $this->complain_table->address = $request->address;
            $this->complain_table->complain = $request->complain;
            $this->complain_table->complain_type = $request->complain_type;
            $result = $this->complain_table->save();

            if($result) {
                // set the message
                $message['message'] = 'Your complain in process. Please collect the ';
                $message['status_code'] = 201;
            } else{
                // set the message
                $message['message'] = 'Your complain can\'t added to my dispensary/wish list!';
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generalComplain(GeneralComplainRequest $request)
    {
//        echo '<pre>';
//        print_r($request->all());
//        echo '</pre>';

        $message = []; // empty array

        try {
            $this->complain_table->complainer_name = $request->complainer_name;
            $this->complain_table->complainer_mobile = $request->complainer_mobile;
            $this->complain_table->institute_name = $request->institute_name;
            $this->complain_table->address = $request->address;
            $this->complain_table->complain = $request->complain;
            $this->complain_table->complain_type = $request->complain_type;
            $result = $this->complain_table->save();

            if($result) {
                // set the message
                $message['message'] = 'Your complain in process. Please collect the ';
                $message['status_code'] = 201;
            } else{
                // set the message
                $message['message'] = 'Your complain can\'t added to my dispensary/wish list!';
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complain = $this->complain_table->getComplainInfo($id);

        if($complain)
        {
            //return response()->json(['data' => $complain, 'status_code' => 200], 200);
            return response()->json([$complain], 200);
        } else{
            return response()->json(['message' => 'Token ID doesn\'t match!', 'status_code' => 400], 400);
        }
    }
}
