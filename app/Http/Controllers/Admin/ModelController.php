<?php namespace App\Http\Controllers\Admin;

use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Models\Moodel;
use App\Models\Brand;

class ModelController extends AdminBaseController
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

    public function createModel()
    {
        $brands = Brand::all();
        return view('admin.model.addmodel')->with('brands', $brands);
    }

    public function saveModel()
    {
        $model = new Moodel();
        $model->model_name = Input::get('name');
        $model->brand_id = Input::get('brand');
        $model->create_date = time();
        $model->update_date = time();
        if ($model->save()) {
            return redirect('admin/managemodel');
        }

    }

    public function manage()
    {
        $data = new Moodel();
        $models = $data->getAllModels();
        return view('admin.model.managemodel')->with('models', $models);
    }

    public function edit($id)
    {
        $model = Moodel::find($id);
        $brands = Brand::all();
        return view('admin.model.editmodel')->with('model', $model)->with('brands',$brands);
    }
    public function update($id) {

        $model = Moodel::find($id);
        $name = Input::get('name');
        $brand = Input::get('brand');
        $model->model_name = $name;
        $model->brand_id=$brand;

        if ($model->save()) {
            return redirect('admin/managemodel');
        }
    }

    public function delete($id)
    {

        $model = Moodel::find($id);

        if ($model->delete()) {

            return redirect('admin/managemodel');
        }
    }
    public  function  GetModelByBrand()
    {
        $models = Moodel::where('brand_id','=',Input::get('brand'))->get();
        $all = [];
        foreach ($models as $model) {
            $all[] = array('id' => $model->model_id, 'name' => $model->model_name);
        }

        echo json_encode($all);
    }


}