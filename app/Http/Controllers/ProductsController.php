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
use App\Models\Vehicles;

class ProductsController Extends AdminBaseController {
    public  function  Create(){
        return view('products.create',array('brands'=>Vehicles::all(),'depts'=>Department::all()));
    }

}