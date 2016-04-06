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

    public function nid_search($nid) {



    }
}
