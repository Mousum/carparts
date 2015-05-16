<?php namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use \App\Models\AdminModel;
class BrandController extends AdminBaseController {

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
       
	public function __construct()
	{
           
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

        public function createBrand()
        {
            return view('brand.addbrand');
        }
        public function saveBrand()
        {
            echo "<pre>";
            print_r(Input::all());
            echo Input::get('name');
            die;
        }


}