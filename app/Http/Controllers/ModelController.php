<?php namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Models\Moodel;
use App\Models\Brand;
class ModelController extends AdminBaseController {

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

        public function createModel()
        {
            $brands = Brand::all();
            return view('model.addmodel')->with('brands',$brands);
        }
        public function saveModel()
        {
            echo "<pre>";
            print_r(Input::all());
            echo Input::get('name');
            die;
        }


}