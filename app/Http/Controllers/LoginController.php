<?php namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use \App\Models\AdminModel;
class LoginController extends AdminBaseController {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
       
	public function __construct()
	{
           
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('login.index');
	}
        public function loginCheck()
        {
            $input = Input::all();
            $admin_user = new AdminModel();
            $result =$admin_user->CheckLogin($input);
            if(count($result))
            {
               $userData = array('Id'=>$result[0]['user_id'],'username'=>$result[0]['user_name'],'accessType'=>$result[0]['type']);
               Session::put($userData);
               
               echo json_encode(array('status'=>TRUE,'msg'=>'Login Successful'));
               return;
            }else
            {
                echo json_encode(array('status'=>FALSE,'msg'=>'Login Failed'));
                return;
            }
            
        }
        public function logout()
        {
            Session::flush(); 
            return redirect('/login');
        }


}
