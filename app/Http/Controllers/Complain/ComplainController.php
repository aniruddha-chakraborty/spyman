<?php

namespace App\Http\Controllers\Complain;

use App\Models\Complain\ComplainModel;
use Illuminate\Http\Request;

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
    public function allComplain()
    {
        // get all complains info
        $data['complains'] = $this->complain_table->getAllComplainInfo();

//        echo '<pre>';
//        print_r($complains);
//        echo '</pre>';

        return view('complain.all_complains_view')->with($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inprocessComplain()
    {
        // get all complains info
        $data['complains'] = $this->complain_table->getInprocessComplain();

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';

        return view('complain.inprocess_complain_view')->with($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function incompleteComplain()
    {
        // get all complains info
        $data['complains'] = $this->complain_table->getInComplainInfo();

//        echo '<pre>';
//        print_r($complains);
//        echo '</pre>';

        return view('complain.incomplete_complain_view')->with($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function completedComplain()
    {
        // get all complains info
        $data['complains'] = $this->complain_table->getAllCompletedComplain();

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';

        return view('complain.completed_complain_view')->with($data);
    }

    /**
     * Display the individual complain information
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getIndividualComplain($id)
    {
        $data['complain'] = $this->complain_table->find($id);

//        echo '<pre>';
//        print_r($complain);
//        echo '</pre>';

        return view('complain.status_change_view')->with($data);
    }

    /**
     * Display the individual complain information
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatusChangeInfo(Request $request)
    {
        $complain = $this->complain_table->find($request->id);

        $message = []; // empty array

        try {
            $complain->status = $request->status;
            $result = $complain->save();

            if($result) {
                // set the message
                $message['message'] = 'Complain status updated!';
                $message['status_code'] = 200;
            } else{
                // set the message
                $message['message'] = 'Complain status can\'t update!';
                $message['status_code'] = 400;
            }

        } catch(Exception $ex) {
            // set the flash message
            $message['message'] = $ex->getMessage();
            $message['status_code'] = $ex->getCode();

        } finally {
            // set the flash message
            session()->flash('message', $message);

            // return back
            return redirect()->back();
        }
    }
}
