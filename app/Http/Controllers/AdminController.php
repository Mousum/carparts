<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Session;
use \App\Models\AdminModel;
use Illuminate\Support\Facades\Input;
class AdminController extends AdminBaseController {
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
    public function __construct() {
        parent::__construct();
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        return view('admin.Dashboard');
    }

    public function createAdmin() {
        return view('admin.addadmin');
    }

    public function saveAdmin() {

        $admin = new AdminModel();
        $admin->user_name = Input::get('username');
        $admin->password = md5(Input::get('password'));
        $admin->is_block = 0;
        $admin->type = "admin";
        $admin->create_date = time();
        $admin->update_date = time();
        if ($admin->save()) {
            return redirect('/manageadmin');
        }
    }

    public function manage() {
        $data = AdminModel::all();
        return view('admin.manageadmin')->with('admins', $data);
    }

    public function edit($id) {
        $admin = AdminModel::find($id);
        return view('admin.editadmin')->with('admin', $admin);
    }

    public function update($id) {

        $admin = AdminModel::find($id);
        $username = Input::get('username');
        $password = Input::get('password');
        if (!empty($password)) {
            $password = md5($password);
        } else {
            $password = $admin['password'];
        }
        $admin->user_name = $username;
        $admin->password = $password;

        if ($admin->save()) {
            return redirect('/manageadmin');
        }
    }

    public function delete($id) {

        $admin = AdminModel::find($id);

        if ($admin->delete()) {

            return redirect('/manageadmin');
        }
    }

    public function block() {
        $id = Input::get('id');

        $admin = AdminModel::find($id);
        $admin->is_block= 1;
        if ($admin->save()) {
            echo json_encode(array('status' => true));
        }
    }

    public function unblock() {
        $id = Input::get('id');
        $admin = AdminModel::find($id);
        $admin->is_block = 0;
        if ($admin->save()) {
            echo json_encode(array('status' => true));
        }
    }

}
