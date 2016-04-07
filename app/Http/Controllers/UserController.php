<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    protected $user_table;
    protected $loginPath = 'login';

    public function __construct() {

        $this->user_table = new User;

    }

    // login route
    public function login() {

        return view('login');

    }

    // login post login
    public function postLogin(Request $request) {

            $username = $request->username;
            $password = $request->password;


            if (Auth::attempt(['username' => $username , 'password' => $password])) {

                    return redirect()->intended('dashboard');
            }

    }

    // login route
    public function logout() {

        Auth::logout();

        return redirect()->intended('login');

    }

    public function profile($nid) {

        $people = $this->user_table->get_profile_data($nid);
        $rajuk  = $this->user_table->get_rajuk($nid);
        $land   = $this->user_table->get_land($nid);
        $service = $this->user_table->get_service($nid);
        $get_business = $this->user_table->get_business($nid);
        $brta       = $this->user_table->get_brta($nid);
        $marrige    = $this->user_table->marrige($nid);
    
        return view('profile.profile_view')
                    ->with('people',$people)
                    ->with('rajuk',$rajuk)
                    ->with('land',$land)
                    ->with('service',$service)
                    ->with('brta',$brta)
                    ->with('marrige',$marrige);

    }

    public function search() {

        return view('search');
    }

}
