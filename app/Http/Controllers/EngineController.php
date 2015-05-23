<?php namespace App\Http\Controllers;

use App\Models\Engine;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Models\Moodel;
use App\Models\Brand;

class EngineController extends AdminBaseController
{

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

    public function createEngine()
    {
        $models = Moodel::all();
        return view('engine.addengine')->with('models', $models);

    }

    public function saveEngine()
    {
        $model = new Engine();
        $model->engine_name = Input::get('name');
        $model->engine_description = Input::get('description');
        $model->engine_power = Input::get('power');
        $model->model_id = Input::get('model');
        if ($model->save()) {
            return redirect('/manageengine');
        }

    }

    public function manage()
    {
        $data = new Moodel();
        $models = $data->getAllModels();
        return view('model.managemodel')->with('models', $models);
    }

    public function edit($id)
    {
        $model = Moodel::find($id);
        $brands = Brand::all();
        return view('model.editmodel')->with('model', $model)->with('brands',$brands);
    }
    public function update($id) {

        $model = Moodel::find($id);
        $name = Input::get('name');
        $brand = Input::get('brand');
        $model->model_name = $name;
        $model->brand_id=$brand;

        if ($model->save()) {
            return redirect('/managemodel');
        }
    }

    public function delete($id)
    {

        $model = Moodel::find($id);

        if ($model->delete()) {

            return redirect('/managemodel');
        }
    }


}