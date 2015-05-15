<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model {

    //
    protected $table = 'admin';
    public $timestamps = FALSE;

    public function CheckLogin($input) {
        $user = AdminModel::where('user_name', '=', $input['username'])
                ->where('password', '=', md5($input['password']))
                ->get();
        return $user;
     } 
    
    public function Registration($input)
    {
        $user = new UserModel();
        $user->username = $input['username'];
        $user->password = $input['password'];
        $user->email = $input['email'];
        $user->isBlock = 0;
        $user->createDate = time();
        if($user->save())
        {
            return $user;
        }
    }

}
