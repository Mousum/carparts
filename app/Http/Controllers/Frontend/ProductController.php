<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 9/2/2015
 * Time: 8:55 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Models\Brand;
use App\Models\Engine;
use App\Models\Moodel;
use Illuminate\Support\Facades\Input;

class ProductController extends FrontBaseController
{
    // Services Starts
    public function GetProductBrands()
    {
        $brands = Brand::all();
        return $brands;
    }

    public function GetModel()
    {
        $models = null;
        if (Input::get('brand')) {
            $models = Moodel::where('brand_id', '=', Input::get('brand'))->get();
        }
        return json_encode($models);

    }

    public function GetEngine()
    {
        $engine = null;
        if (Input::get('model')) {
            $engine = Engine::where('model_id', '=', Input::get('model'))->get();
        }
        return json_encode($engine);
    }
     //Service Ends
}