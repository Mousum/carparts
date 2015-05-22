<?php
namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use \App\Models\AdminModel;
use App\Models\Brand;

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
    public function __construct() {
        
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {

        $data = Brand::all();

        return view('brand.Index')->with('brands', $data);
    }

    public function createBrand() {
        return view('brand.addbrand');
    }

    public function saveBrand() {

        $destinationPath = 'uploads/BrandLogos'; // upload path
        $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
        $fileName = str_replace(' ', '', Input::get('brand_name')) . '.' . $extension; // renameing image
        Input::file('logo')->move($destinationPath, $fileName); // uploading file to given path

        $newBrand = new Brand();
        $newBrand->brand_name = Input::get('brand_name');
        $newBrand->brand_logo = $destinationPath . '/' . $fileName;
        $newBrand->create_date = time();
        $newBrand->update_date = time();

        if ($newBrand->save()) {
            Session::flash('success', 'Brand created Successfully');
            return redirect('/brands');
        }
    }

    public function editBrand($id) {
        $brand = Brand::find($id);
        return view('brand.editbrand')->with('brand', $brand);
    }

    public function updateBrand($id) {
        $brand = Brand::find($id);
        if (Input::get('brand_name')) {
            $brand->brand_name = Input::get('brand_name');
        }
        if (Input::file('logo')) {
            $destinationPath = 'uploads/BrandLogos'; // upload path
            $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
            $fileName = str_replace(' ', '', $brand->brand_name) . '.' . $extension; // renameing image
            Input::file('logo')->move($destinationPath, $fileName);
            $brand->brand_logo = $destinationPath . '/' . $fileName;
        }
        $brand->update_date = time();
        if ($brand->save()) {
            Session::flash('success', 'Brand updated Successfully');
            return redirect('/brands');
        }
    }

    public function delete() {
        $id = Input::get('id');
        $brand = Brand::find($id);

        if ($brand->delete()) {

            return "Success";
        }
    }

}
