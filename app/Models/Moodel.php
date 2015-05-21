<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moodel extends Model {

    //
    protected $table = 'model';
    public $timestamps = FALSE;
    protected $primaryKey = 'model_id';

    public function getAllModels() {
        $data = Moodel::join('brand', 'model.brand_id', '=', 'brand.brand_id')
                ->select('model.*', 'brand.brand_name')
                ->get();
        return $data;
    }

    public function getAllModelsByBrand($id) {
        $data = Moodel::join('brand', 'model.brand_id', '=', 'brand.brand_id')
                ->select('model.*', 'brand.brand_name')
                ->where('model.brand_id', $id)
                ->get();
        return $data;
    }

}
