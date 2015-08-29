<?php

namespace App\Http\Controllers\Admin;

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

    public function Index() {
//        $model = new Events();
//        $events = $model->GetAllEvents();
//        echo "<pre>";
//        print_r($events);
//        die();
        return view("admin.events.Index")->with("events", Events::all());
    }

    public function create() {
        return view("admin.events.Create");
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
                $fileName = str_replace(' ', '', $event->event_name) . "_" . ++$i . "_" . rand(0, 100) . '.' . $extension; // renameing image
                $file->move($destinationPath, $fileName);

                $image = new EventImages();

                $image->event_id = $event->event_id;
                $image->img_location = $destinationPath . '/' . $fileName;

                $image->save();
            }

            if ($i == $fileCount) {
                Session::flash('success', 'Event created Successfully');
                return redirect('admin/events');
            }
        }
    }

    public function Edit($id) {
        $model = new Events();
        $event = $model->GetSingleEvent($id);
        $event[0]['event_id']=$id;
  
        return view("admin.events.Edit")->with("event", $event);
    }

    public function Update() {
      
        $id = Input::get('id');
        
        $files = Input::file('images');
        $event = Events::find($id);
        $event->event_name = Input::get('event_name');
        $event->event_time = strtotime(Input::get('events_date'));
        $event->event_location = Input::get('events_locations');
        $event->even_description = Input::get('even_description');
        if ($event->save()) {
            if ($files != NULL) {
                $fileCount = count($files);
                $i = 0;
                foreach ($files as $file) {
                    $destinationPath = 'uploads/evenntImages'; // upload path
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $fileName = str_replace(' ', '', $event->event_name) . "_" . ++$i . "_" . rand(0, 100) . '.' . $extension; // renameing image
                    $file->move($destinationPath, $fileName);

                    $image = new EventImages();

                    $image->event_id = $id;
                    $image->img_location = $destinationPath . '/' . $fileName;

                    $image->save();
                    
                }
                
            }
             Session::flash('success', 'Event Updated Successfully');
                return redirect('admin/events');
        }
        
    }

    public function deleteImage() {
        $id = Input::get('id');
        $img = EventImages::find($id);
        $loc = $img->img_location;
        if ($img->delete()) {
            // if(delete(URL::to('/'.$loc))){
            return "Success";
            //}
        }
    }

    public function deleteEvent() {
        $id = Input::get('id');
        $event = Events::find($id);

        if ($event->delete()) {

            return "Success";
        }
    }

}
