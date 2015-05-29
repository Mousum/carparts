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
}

?>
