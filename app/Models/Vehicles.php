<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 8/10/2015
 * Time: 9:44 PM
 */

namespace App\Models;


class Vehicles extends AdminModel {
    protected $table = 'vehicle';
    public $timestamps = FALSE;
    protected $primaryKey = 'vehicle_id';

    public function Brand(){
        return $this->belongsTo('App\Models\Brand', 'vehicle_brand_id');
    }
    public function Moodel(){
        return $this->belongsTo('App\Models\Moodel', 'vehicle_model_id');
    }
    public function Engine(){
        return $this->belongsTo('App\Models\Engine', 'vehicle_engine_id');
    }




}