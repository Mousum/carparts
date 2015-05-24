<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use \App\Models\Department;
use \App\Models\Moodel;
use \App\Models\Brand;
use App\Models\Engine;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartmentsController
 *
 * @author Mausum
 */
class DepartmentsController extends AdminBaseController {

    public function __construct() {
        parent::__construct();
    }

    public function Index() {
        $Dept = new Department();
        $data = Department::all();//$Dept->getAllDepartment();
//        echo "<pre>";
//        print_r($data);
//        die();
        return view('Dept.Index')->with('depts', $data);
    }

    public function Create() {
        $brandData = Brand::all();
        $modelData = Moodel::all();

        return view('Dept.Create')->with('brands', $brandData);
    }

    public function savedept() {
        $destinationPath = 'uploads/DeptImages'; // upload path
        $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
        $fileName = str_replace(' ', '', Input::get('d_name')) . '.' . $extension; // renameing image
        Input::file('logo')->move($destinationPath, $fileName); // uploading file to given path
        $newDept = new Department();
        $newDept->department_name = Input::get('d_name');
        $newDept->department_description = Input::get('d_des');
        $newDept->department_image = $destinationPath . '/' . $fileName;
        $newDept->model_id = 0;
        $newDept->brand_id = 0;
        $newDept->engine_id = 0;
        $newDept->create_date = time();
        $newDept->update_date = time();
        if ($newDept->save()) {
            Session::flash('success', 'Department created Successfully');
            return redirect('/depts');
        }
    }

    public function GetModelByBrand() {
        $model = new Moodel();
        $Models = $model->getAllModelsByBrand(Input::get('id'));
        $var = array();
        $i = 0;
        if ($Models != null) {
            foreach ($Models as $m) {
                $var[$i] = array("id" => $m->model_id, "value" => $m->model_name);
                $i++;
            }
        } else {
            $var[$i] = array("msg" => "failed");
        }

        return json_encode(array("models" => $var));
    }

    public function GetEngineByModel() {
        $Engine = new Engine();
        $engine = $Engine->getAllEngineByModel(Input::get('id'));
        $var = array();
        $i = 0;

        if ($engine != null) {
            foreach ($engine as $m) {
                $var[$i] = array("id" => $m->engine_id, "value" => $m->engine_name);
                $i++;
            }
        } else {
            $var[$i] = array("msg" => "failed");
        }

        return json_encode(array("engines" => $var));
    }

    public function DeleteDepartment() {
        $id = Input::get('id');
        $dept = Department::find($id);

        if ($dept->delete()) {

            return "Success";
        }
    }

    public function edit($id) {
        $brandData = Brand::all();

        $dept = Department::find($id);
        return view('Dept.Edit')->with('item', $dept)->with("brands", $brandData);
    }

    public function updatedept() {
        $id = Input::get('id');
        $dept = Department::find($id);
        if (Input::get('d_name') != "") {
            $dept->department_name = Input::get('d_name');
        }
        if (Input::file('logo')) {
            $destinationPath = 'uploads/DeptImages'; // upload path
            $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
            $fileName = str_replace(' ', '', $dept->department_name) . '.' . $extension; // renameing image
            Input::file('logo')->move($destinationPath, $fileName); // uploading file to given path
            $dept->department_image = $destinationPath . '/' . $fileName;
        }
        if (Input::get('d_des') != "") {
            $dept->department_description = Input::get('d_des');
        }
        $dept->update_date = time();
        if ($dept->save()) {
            Session::flash('success', 'Department updated Successfully');
            return redirect('/depts');
        }
    }

}
