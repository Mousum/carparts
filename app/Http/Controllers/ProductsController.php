<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 8/6/2015
 * Time: 1:37 AM
 */

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Department;
use App\Models\ProductDescriptionMeta;
use App\Models\Products;
use App\Models\VehicleProducts;
use App\Models\Vehicles;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProductsController Extends AdminBaseController
{
    public function  Create()
    {
        return view('products.create', array('brands' => Vehicles::all(), 'depts' => Department::all()));
    }

    public function SaveProduct()
    {
        $rule = [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_department' => 'required',
            'vehicle' => 'required'

        ];

        $validator = Validator::make(Input::all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $item = new Products();
        $files = Input::file('product_images');
        $fileArray = [];

        if ($files[0] != '') {
            foreach ($files as $file) {

                $destinationPath = 'uploads/product_images';
                $filename = $this->generateRandomString() . '.' . File::extension($file->getClientOriginalName());
                $upload_success = $file->move($destinationPath, $filename);
                if ($upload_success) {
                    //  array_push($fileArray, $filename);
                    $fileArray[] = $filename;
                }
            }
            $item->product_images = json_encode($fileArray);


        } else {

            return redirect()->back()->withInput()->withErrors("Product images  are required");
        }
        $key = Input::get('product_description_key');
        $value = Input::get('product_description_value');
        $meta_description = [];
        if (!empty($key) && !empty($value)) {
            foreach ($key as $index => $val) {
                if ($val != '' && $value[$index] != '') {
                    $meta_description[] = array('key' => $val, 'value' => $value[$index]);
                    $data = ProductDescriptionMeta::where('key_word', '=', $val)->get();

                    if (!$data->first()) {
                        $value_key = new ProductDescriptionMeta();
                        $value_key->key_word = $val;
                        $value_key->save();
                    }
                }

            }
            $item->product_meta_descriptions = json_encode($meta_description);
        } else {
            return redirect()->back()->withInput()->withErrors(" Incomplete Product description");
        }

        $item->product_name = Input::get('product_name');
        $item->product_dept_id = Input::get('product_department');
        $item->product_price = Input::get('product_price');
        $item->is_active = 1;
        $item->is_front_page = (isset($_POST['is_frontpage'])) ? 1 : 0;
        $item->is_special = (isset($_POST['is_special'])) ? 1 : 0;
        $item->create_date = date("Y-m-d H:i:s");

        if ($item->save()) {
            $vehicles = Input::get('vehicle');
            foreach ($vehicles as $vehicle => $id) {
                $vp = new VehicleProducts();
                $vp->vp_vehicle_id = $id;
                $vp->vp_product_id = $item->product_id;
                $vp->save();
            }
            return redirect('products/manage');
        }
    }


    private function  generateRandomString($length = 10)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    public function GetDescriptionMeta()
    {
        $meta = ProductDescriptionMeta::where('key_word', 'Like', '%' . Input::get('keyword') . '%')->get();
        $array = [];
        foreach ($meta as $value) {
            $array[] = $value->key_word;

        }
        echo json_encode($array);
    }

    public function manageProduct()
    {
        $products = Products::with('Departments')->get();
        foreach ($products as $product) {
            $product->vehicles = VehicleProducts::where('vp_product_id', '=', $product->product_id)->get();
        }
        return view('products.manage', array('products' => $products));
    }

    public function EditProduct($id)
    {
        $product = Products::find($id);
        $vehicleProducts = VehicleProducts::where('vp_product_id', '=', $id)->get();
        $vehicle = Vehicles::all();
        return view('products.edit', array('product' => $product, 'vehicleProducts' => $vehicleProducts, 'vehicles' => $vehicle, 'depts' => Department::all()));

    }

    public function DeleteProduct()
    {
        $id = Input::get('id');
        $product = Products::find($id);

        if ($product->delete()) {

            return "Success";
        }
    }

    public function deleteImage()
    {
        $product = Products::find(Input::get('prid'));
        $images = json_decode($product->product_images);
        foreach ($images as $key => $value) {
            if ($key == Input::get('id')) {
                unset($images[0]); // remove item at index 0
                $images = array_values($images);
            }
        }


        if (!empty($images)) {
            $product->product_images = json_encode($images);
            if ($product->save()) {
                echo json_encode(array('status' => true, 'msg' => 'Image Deleted Successfully'));
            } else {
                echo json_encode(array('status' => false, 'msg' => 'Image cannot Deleted'));
            }
        } else {
            echo json_encode(array('status' => false, 'msg' => 'Image Cannot Be Deleted'));
        }

    }

    public function UpdateProduct($id)
    {
        $rule = [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_department' => 'required',
            'vehicle' => 'required'

        ];

        $validator = Validator::make(Input::all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $item = Products::find($id);
        $files = Input::file('product_images');
        $fileArray = json_decode($item->product_images);

        if ($files[0] != '') {
            foreach ($files as $file) {

                $destinationPath = 'uploads/product_images';
                $filename = $this->generateRandomString() . '.' . File::extension($file->getClientOriginalName());
                $upload_success = $file->move($destinationPath, $filename);
                if ($upload_success) {
                    array_push($fileArray, $filename);
                    //$fileArray[] = $filename;
                }
            }
            $item->product_images = json_encode($fileArray);


        }
        $key = Input::get('product_description_key');
        $value = Input::get('product_description_value');
        $meta_description = [];
        if (!empty($key) && !empty($value)) {
            foreach ($key as $index => $val) {
                if ($val != '' && $value[$index] != '') {
                    $meta_description[] = array('key' => $val, 'value' => $value[$index]);
                    $data = ProductDescriptionMeta::where('key_word', '=', $val)->get();

                    if (!$data->first()) {
                        $value_key = new ProductDescriptionMeta();
                        $value_key->key_word = $val;
                        $value_key->save();
                    }
                }
            }
            $item->product_meta_descriptions = json_encode($meta_description);
        } else {
            return redirect()->back()->withInput()->withErrors(" Incomplete Product description");
        }

        $item->product_name = Input::get('product_name');
        $item->product_dept_id = Input::get('product_department');
        $item->product_price = Input::get('product_price');
        $item->is_active = 1;
        $item->is_front_page = (isset($_POST['is_frontpage'])) ? 1 : 0;
        $item->is_special = (isset($_POST['is_special'])) ? 1 : 0;
        $item->update_date = date("Y-m-d H:i:s");

        if ($item->save()) {
            $vehicles = Input::get('vehicle');//1 3
            foreach ($vehicles as $vehicle => $i) {
                $vps = VehicleProducts::where('vp_product_id', '=', $id)->where('vp_vehicle_id', '=', $i)->get();
                if (!$vps->first()) {
                    $vp = new VehicleProducts();
                    $vp->vp_vehicle_id = $i;
                    $vp->vp_product_id = $item->product_id;
                    $vp->save();
                }
            }
            $vpp = VehicleProducts::where('vp_product_id', '=', $id)->get();
            foreach ($vpp as $vp) {
                if (!in_array($vp->vp_vehicle_id, $vehicles)) {
                    $vp->delete();
                }
            }
            return redirect('products/manage');
        }
    }


}