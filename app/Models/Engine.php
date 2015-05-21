<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Engine
 *
 * @author Mausum
 */

class Engine extends Model {
    //put your code here
    
    protected $table = 'engine';
    public $timestamps = FALSE;
    protected $primaryKey = 'engine_id';
    
    public function getAllEngineByModel($modelId){
          $data = Engine::join('model', 'engine.model_id', '=', 'model.model_id')
                ->select('engine.*', 'model.model_name')
                ->get();
        return $data;
    }

}
