<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDepartmentModel extends Model {

    //
    protected $table = 'sub_department';
    public $timestamps = FALSE;
    protected $primaryKey = 'sub_department_id';

    public function  getAllSubDepartment()
    {
        $data = SubDepartmentModel::join('department', 'department.department_id', '=', 'sub_department.sub_department_id')
            ->select('sub_department.*','department.department_name')
            ->get();
        return $data;
    }
    
}
