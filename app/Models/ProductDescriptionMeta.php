<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 8/18/2015
 * Time: 11:09 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductDescriptionMeta extends Model {
    protected $table = 'product_description_keys';
    public $timestamps = FALSE;
    protected $primaryKey = 'key_id';
}