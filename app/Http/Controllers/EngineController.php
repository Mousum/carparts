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
        $data = new Engine();

        $engines= $data->getAllEngine();

        return view('engine.manageengine')->with('engines', $engines);
    }

    public function edit($id)
    {
        $engine = Engine::find($id);
        $models = Moodel::all();
        return view('engine.editengine')->with('engine', $engine)->with('models',$models);
    }
    public function update($id) {

        $engine = Engine::find($id);
        $name = Input::get('name');
        $engine_description = Input::get('description');
        $engine_power = Input::get('power');
        $model_id = Input::get('model');
        $engine->engine_name = $name;
        $engine->engine_description=$engine_description;
        $engine->engine_power = $engine_power;
        $engine->model_id = $model_id;

        if ($engine->save()) {
            return redirect('/manageengine');
        }
    }

    public function delete($id)
    {

        $engine = Engine::find($id);

        if ($engine->delete()) {

            return redirect('/manageengine');
        }
    }


}