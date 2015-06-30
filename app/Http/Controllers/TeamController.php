<?php namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Models\Team;

class TeamController extends AdminBaseController
{


    public function __construct()
    {

    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */

    public function createMember()
    {
        return view('Team.addMember');

    }

    public function saveMember()
    {

         $team = new Team();
         $team->member_name= Input::get('name');
         $team->member_email = Input::get('email');
         $team->member_fb_link = Input::get('fb_link');
         $team->member_twitter_link = Input::get('twitter_link');
         $team->member_linkdin_link = Input::get('linkdin_link');
         $team->member_contact = Input::get('contact');
         $file = Input::file('image');
         $destinationPath = 'uploads/TeamImages'; // upload path
         $extension = $file->getClientOriginalExtension(); // getting image extension
         $fileName = str_replace(' ', '',$team->member_name) . "_" .rand(0, 100) . '.' . $extension; // renameing image
         $file->move($destinationPath, $fileName);
         $team->member_photo = $destinationPath . '/' . $fileName;

         if($team->save())
         {
             return redirect('/managemember');
         }

    }

    public function manage()
    {
        $members= Team::all();
        return view('Team.managemember')->with('members', $members);
    }

    public function edit($id)
    {
        $engine = Engine::find($id);
        $models = Moodel::all();
        return view('engine.editengine')->with('engine', $engine)->with('models',$models);
    }
    public function update($id) {

        $engine = Engine::find($id);
        $name = Input::get('name');
        $engine_description = Input::get('description');
        $engine_power = Input::get('power');
        $model_id = Input::get('model');
        $engine->engine_name = $name;
        $engine->engine_description=$engine_description;
        $engine->engine_power = $engine_power;
        $engine->model_id = $model_id;

        if ($engine->save()) {
            return redirect('/manageengine');
        }
    }

    public function delete($id)
    {

        $engine = Engine::find($id);

        if ($engine->delete()) {

            return redirect('/manageengine');
        }
    }


}