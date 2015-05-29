<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Session;
use \App\Models\AdminModel;
use Illuminate\Support\Facades\Input;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventsController
 *
 * @author Mausum
 */
class EventsController extends AdminBaseController {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function create() {
        return view("events.Create");
    }
    public function addEvent(){
        
    }

}
