<?php
/**
 * Created by PhpStorm.
 * User: Mausum
 * Date: 9/19/2015
 * Time: 1:18 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contents extends Model {
    protected $table = 'contents';
    public $timestamps = FALSE;
    protected $primaryKey = 'id';
}