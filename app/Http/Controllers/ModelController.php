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
            $model = new Moodel();
			$model->model_name = Input::get('name');
			$model->brand_id = Input::get('brand');
			$model->create_date = time();
			$model->update_date = time();
			if($model->save())
			{
				return redirect('/managemodel');
			}

        }


}