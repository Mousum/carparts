<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Session;

class AdminBaseController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
       
        if (!$this->login()) {
        
           return redirect('/')->send();
        
        }
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        //return view('admin.dashboard');
    }

    public function login() {

        $id = Session::get('Id');
        return ($id) ? TRUE : FALSE;
    }

}
