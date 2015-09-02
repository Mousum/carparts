<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 9/1/2015
 * Time: 8:58 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Models\Products;

class SiteController extends FrontBaseController
{

    public function Home()
    {
        $brandModel = new ProductController();
        $featuredProducts = Products::with('Departments')->where('is_active','=',1)->paginate(8);
        $featuredProducts->setPath(url('/'));
         return view('frontend.site.home',array('brands'=>$brandModel->GetProductBrands(),'featuredproducts'=>$featuredProducts));
    }
}