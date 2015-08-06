<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 8/6/2015
 * Time: 1:34 AM
 */

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Products Extends Model{
    protected $table = 'product';
    public $timestamps = FALSE;
    protected $primaryKey = 'product_id';
}