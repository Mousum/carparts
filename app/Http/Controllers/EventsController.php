<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Session;
use \App\Models\AdminModel;
use Illuminate\Support\Facades\Input;
use App\Models\Events;
use App\Models\EventImages;

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
    public function Index(){
        $model = new Events();
        $events = $model->GetAllEvents();
//        echo "<pre>";
//        print_r($events);
//        die();
         return view("events.Index")->with("events", $events);
    }

    public function create() {
        return view("events.Create");
    }

    public function addEvent() {

        $event = new Events();
        $event->event_name = Input::get('event_name');
        $event->event_time = strtotime(Input::get('events_date'));
        $event->event_location = Input::get('events_locations');
        $event->even_description = Input::get('even_description');
        $event->create_date = time();
        if ($event->save()) {
            $files = Input::file('images');
            $fileCount = count($files);
            $i = 0;
            foreach ($files as $file) {
                $destinationPath = 'uploads/evenntImages'; // upload path
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $fileName = str_replace(' ', '', $event->event_name) . "_" . ++$i ."_".rand(0,100).'.' . $extension; // renameing image
                $file->move($destinationPath, $fileName);

                $image = new EventImages();

                $image->event_id = $event->event_id;
                $image->img_location = $destinationPath . '/' . $fileName;

                $image->save();
            }

            if ($i == $fileCount) {
                Session::flash('success', 'Event created Successfully');
                return redirect('/events');
            }
        }
    }

}
