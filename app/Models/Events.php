<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Events
 *
 * @author Mausum
 */
class Events extends Model  {
    //put your code here
    protected $table = 'event';
    public $timestamps = FALSE;
    protected $primaryKey = 'event_id';
    public $has_many = 'event_images';


    public function GetAllEvents(){
         $data = Events::join('event_images', 'event.event_id', '=', 'event_images.event_id')
                ->select('event.*', 'event_images.img_location')
                ->get();
        return $data;
    }
    public function GetSingleEvent($id){
         $data = Events::join('event_images', 'event.event_id', '=', 'event_images.event_id')
                ->select('event.*', 'event_images.*')
                 ->where('event.event_id', '=', $id)
                ->get();
        return $data; 
    }
    public function EventImages(){
        return $this->hasMany('EventImages');
    }
}

?>
