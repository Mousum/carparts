<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 9/1/2015
 * Time: 8:58 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Events\Event;
use App\Models\Contents;
use App\Models\Events;
use App\Models\Products;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;

class SiteController extends FrontBaseController
{

    public function Home()
    {
        $brandModel = new ProductController();
        $featuredProducts = Products::with('Departments')->where('is_active','=',1)->paginate(8);
        $featuredProducts->setPath(url('/'));
        return view('frontend.site.home',array('brands'=>$brandModel->GetProductBrands(),'featuredproducts'=>$featuredProducts));
    }
    Public function About(){
        return view('frontend.site.about',['content'=>Contents::where('key','=',"about_company")->first(),'siteTitle'=>"About | ".Lang::get("site.company_name")]);
    }
    Public function WhyUs(){
        return view('frontend.site.why_us',['content'=>Contents::where('key','=',"why_us")->first(),'siteTitle'=>"About | ".Lang::get("site.company_name")]);
    }
    Public function Events(){
        $events  = Events::with('EventImages')->where('event_time','>=',time())->get();
        return view('frontend.site.events',['events'=>$events,'siteTitle'=>"About | ".Lang::get("site.company_name")]);
    }
    Public function EventDetailsPartial(){
        $events  = Events::with('EventImages')->where('event_id','=',Input::get('id'))->first();
        //print_r($events);
        return view('frontend.site._eventpartial',['event'=>$events,]);
    }
}