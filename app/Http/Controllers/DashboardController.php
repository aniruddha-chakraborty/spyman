<?php

namespace App\Http\Controllers;

use App\Models\Complain\ComplainModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $complain_table;

    public function __construct()
    {
        $this->complain_table = new ComplainModel;
    }

    /**
     * Return dashboard/home view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard() {
        //return view('dashboard_view');
        // get all complains info
        $data['complains'] = $this->complain_table->getAllComplainInfo();

//        echo '<pre>';
//        print_r($complains);
//        echo '</pre>';

        return view('complain.all_complains_view')->with($data);
    }
}
