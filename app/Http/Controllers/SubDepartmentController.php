<?php namespace App\Http\Controllers;

use App\Models\DepartmentModel;
use App\Models\SubDepartmentModel;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Models\Moodel;


class SubDepartmentController extends AdminBaseController
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

    public function createSubDepartment()
    {
        $departments = DepartmentModel::all();
        return view('subdepartment.addsubdepartment')->with('departments', $departments);
       // return view('subdepartment.addsubdepartment');
    }

    public function saveSubDepartment()
    {

       // echo $_POST['name'];
        //echo "dfdfdfs";
        //return view('subdepartment.addsubdepartment');
        $sub = new SubDepartmentModel();
        $sub->sub_department_name = Input::get('name');
        $sub->department_id = Input::get('department');

        if ($sub->save()) {
            return redirect('/managesubdepartment');
       }
    }
//        $model->model_name = Input::get('name');
//        $model->brand_id = Input::get('brand');
//        $model->create_date = time();
//        $model->update_date = time();
//        if ($model->save()) {
//            return redirect('/managemodel');
//        }



    public function manage()
    {
        $data = new SubDepartmentModel();
        $subdepartments = $data->getAllSubDepartment();
        return view('subdepartment.managesubdepartment')->with('subdepartments', $subdepartments);
    }

    public function edit($id)
    {

        $departments = DepartmentModel::all();
        $subdepartments = SubDepartmentModel::find($id);
        //print_r($subdepartments);
        return view('subdepartment.editsubdepartment')->with('departments', $departments)->with('subdepartments',$subdepartments);
        //return view('subdepartment.editsubdepartment');
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

        if ($model->delete($id)) {

            return redirect('/managemodel');
        }
    }


}