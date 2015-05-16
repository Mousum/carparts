<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

    //
    protected $table = 'brand';
    public $timestamps = FALSE;
    protected $primaryKey = 'brand_id';

    public function CheckLogin($input) {
        $user = AdminModel::where('user_name', '=', $input['username'])
                ->where('password', '=', md5($input['password']))
                ->get();
        return $user;
     } 
    
    public function Registration($input)
    {
        $user = new UserModel();
        $user->user_name = $input['username'];
        $user->password = $input['password'];
        $user->is_block = 0;
        $user->type ="admin";
        $user->create_date = time();
        $user->update_date = time();
        if($user->save())
        {
            return $user;
        }
    }

}
