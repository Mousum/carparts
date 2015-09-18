<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventImages
 *
 * @author chizz
 */
class EventImages extends Model {

    //put your code here
    protected $table = 'event_images';
    public $timestamps = FALSE;
    protected $primaryKey = 'img_id';

    public function Events(){
        $this->hasOne('App\Models\Events','event_id','event_id');
    }
 

}

?>
