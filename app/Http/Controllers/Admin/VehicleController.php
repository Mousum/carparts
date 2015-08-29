<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 8/10/2015
 * Time: 9:32 PM
 */

namespace App\Http\Controllers\Admin;


use App\Models\Brand;
use App\Models\Vehicles;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class VehicleController extends AdminBaseController
{
    public function  Create()
    {
        return view('admin.vehicle.create', array('brands' => Brand::all()));
    }

    public function SaveVehicle()
    {
        $rule = [
            'vehicle_name' => 'required',
            'vehicle_brand' => 'required',
            'model' => 'required',
            'engine' => 'required'

        ];

        $validator = Validator::make(Input::all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $item = new Vehicles();
        $item->vehicle_name = Input::get('vehicle_name');
        $item->vehicle_brand_id = Input::get('vehicle_brand');
        $item->vehicle_model_id = Input::get('model');
        $item->vehicle_engine_id = Input::get('engine');
        if ($item->save()) {
            return redirect('admin/vehicle/manage');

        } else {
            return redirect()->back()->withInput()->withErrors('Could not save');
        }


    }

    public function  ManageVehicle()
    {
        $vehicles = Vehicles::with('Brand')->with('Moodel')->with('Engine')->get();
        return view('admin.vehicle.manage', array('vehicles' => $vehicles));
    }

    public function deletevehicle()
    {
        $item = Vehicles::find(Input::get('id'));
        if ($item->delete()) {
            return redirect()->back()->with('Vehicle Deleted Successful');
        }

    }

    public function  editVehicle($id)
    {

        return view('admin.vehicle.edit', array('brands' => Brand::all(), 'item' => Vehicles::find($id)));
    }

    public function UpdateVehicle($id)
    {
        $rule = [
            'vehicle_name' => 'required',
            'vehicle_brand' => 'required',
            'model' => 'required',
            'engine' => 'required'

        ];

        $validator = Validator::make(Input::all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $item = Vehicles::find($id);
        $item->vehicle_name = Input::get('vehicle_name');
        $item->vehicle_brand_id = Input::get('vehicle_brand');
        $item->vehicle_model_id = Input::get('model');
        $item->vehicle_engine_id = Input::get('engine');
        if ($item->save()) {
            return redirect('admin/vehicle/manage');
        } else {
            return redirect()->back()->withInput()->withErrors('Could not save');

        }

    }

}