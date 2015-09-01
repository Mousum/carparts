<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 9/1/2015
 * Time: 8:58 PM
 */

namespace App\Http\Controllers\Frontend;


class SiteController extends FrontBaseController
{

    public function Home()
    {
         return view('frontend.site.home');
    }
}