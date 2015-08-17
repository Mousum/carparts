<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 8/18/2015
 * Time: 1:35 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class VehicleProducts extends Model {
    protected $table = 'vehicle_product';
    public $timestamps = FALSE;
    protected $primaryKey = 'vp_id';

    public function Vehicles(){
        $this->hasOne('App\Model\Vehicles','vehicle_id','vp_vehicle_id');
    }
    public function Products(){
        $this->hasOne('App\Model\Products','product_id','vp_product_id');
    }
}