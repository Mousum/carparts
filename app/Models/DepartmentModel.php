<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model {

    //
    protected $table = 'department';
    public $timestamps = FALSE;
    protected $primaryKey = 'department_id';

    public function  getAllDepartment()
    {
//        $data = SubDepartmentModel::join('department', 'model.brand_id', '=', 'brand.brand_id')
//            ->select('model.*','brand.brand_name')
//            ->get();
//        return $data;
    }
    
}
