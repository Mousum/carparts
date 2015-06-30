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

class Team extends Model {
    //put your code here
    
    protected $table = 'team';
    public $timestamps = FALSE;
    protected $primaryKey = 'member_id';

}
