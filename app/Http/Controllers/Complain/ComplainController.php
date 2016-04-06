<?php

namespace App\Http\Controllers\Complain;

use App\Models\Complain\ComplainModel;
use Illuminate\Http\Request;

use App\Http\Requests\ComplainRequest;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all complains info
        $complains = $this->complain_table->getAllComplainInfo();

        echo '<pre>';
        print_r($complains);
        echo '</pre>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComplainRequest $request)
    {
        $message = []; // empty array

        try {
            $this->complain_table->complainer_name = $this->complainer_name;
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
                $message['message'] = 'Medicine(s) added to my dispensary/wish list.';
                $message['status_code'] = 201;
            } else{
                // set the message
                $message['message'] = 'Medicine can\'t added to my dispensary/wish list!';
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
        $complain = $this->complain_table->find($id);

        echo '<pre>';
        print_r($complain);
        echo '</pre>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complain = $this->complain_table->find($id);

        echo '<pre>';
        print_r($complain);
        echo '</pre>';
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
