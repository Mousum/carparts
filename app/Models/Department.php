<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

    //
    protected $table = 'department';
    public $timestamps = FALSE;
    protected $primaryKey = 'department_id';

    public function getAllDepartment(){
          $data = Department::join('model', 'model.model_id', '=', 'department.model_id')
                  ->join('brand', 'brand.brand_id', '=', 'department.brand_id')
                  ->join('engine', 'engine.engine_id', '=', 'department.engine_id')
                ->select('department.*', 'model.model_name','brand.brand_name','engine.engine_name')
                ->get();
        return $data;
    }
    
}
