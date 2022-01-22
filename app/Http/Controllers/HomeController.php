<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skils;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('users')->where('id', 1)->first();
        $count_project = DB::table('project')->count();
        $count_skills = DB::table('skils')->count();
        // dd($count_skills);
        return view('admin.dashboard',[
            'data' => $data,
            'project' => $count_project,
            'skils' => $count_skills,
        ]);
    }

    /**
     * index_edit
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function index_edit(Request $request)
    {

        $user= User::find(1);
        $user->name = $request->name;
        $user->title = $request->title;
        $user->role = $request->role;
        $user->facebook = $request->facebook;
        $user->github = $request->github;
        $user->instagram = $request->instagram;
        $user->email = $request->email;
        $user->wp = $request->wp;
        $user->update();
        return redirect()->back();

    }

    public function skils(){
        $data = DB::table('users')->where('id', 1)->first();
        $skils = DB::table('skils')->get();
        // dd($skils);
        return view('admin.skils',[
            'data' => $data,
            'skils' => $skils,
        ]);
    }

    public function add(){
        $data = DB::table('users')->where('id', 1)->first();
        return view('admin.skill_add',[
            'data' => $data,
        ]);
    }

    public function create_skill(Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'img' => 'required',
            'class' => 'required'
        ]);

       $save  = new Skils();
       $save->name = $request->name;
       $save->img = $request->img;
       $save->class = $request->class;
       $save->save();
       session()->flash('msg', 'Skill addedd Successfully');
       return redirect()->back();

    }

    public function delete_skill($id){
        $find = Skils::find($id);
        //dd($find);
        $find->delete();
        return redirect()->back();
    }

    public function edit_skill($id){
        $data = DB::table('users')->where('id', 1)->first();
        $find = Skils::find($id);
       // dd($find);
        return view('admin.skill_edit',[
            'data' => $data,
            'edits' => $find,
        ]);
    }

    public function update_skill(Request $request, $id){

        $validate = $request->validate([
            'name' => 'required',
            'img' => 'required',
            'class' => 'required'
        ]);

       $save  =  Skils::find($id);
       $save->name = $request->name;
       $save->img = $request->img;
       $save->class = $request->class;
       $save->update();
       session()->flash('msg', 'Skill Edited Successfully');
       return redirect()->back();
    }


    // Projects


    public function projects(){
    $data = DB::table('users')->where('id', 1)->first();
    $projects = DB::table('project')->get(); // Project::all();
    return view('admin.projects',[
        'data' => $data,
        'projects' => $projects
    ]);
    }

    public function projects_add(){
        $data = DB::table('users')->where('id', 1)->first();
        return view('admin.projects_add',[
            'data' => $data
        ]);
    }

    public function projects_create(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'lang' => 'required',
            'photo' => 'required'
        ]);

        $project = new Projects();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->repo_url = $request->repo_url;
        $project->link = $request->link;

        $image = $request->file('photo');
        //$image_name = $image->getClientOriginalName();
        $filename = 'profile-photo-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/assests/projects'),$filename);
        $image_path = "/assests/projects/" . $filename;
        //dd($image);

        $project->img = $image_path;
        $project->visit = $request->visit;
        $project->lang = $request->lang;
        $project->rep_visit = $request->rep_visit;
        $project->save();

        session()->flash('msg', 'Project Create Successfully');
        return redirect()->back();

    }

    public function delete_projects($id){
        $project = Projects::find($id);
        $project->delete();
        return redirect()->back();
    }

    public function edit_projects($id){
        $data = DB::table('users')->where('id', 1)->first();
        $find = Projects::find($id);
       // dd($find);
        return view('admin.project_edit',[
            'data' => $data,
            'edits' => $find,
        ]);
    }

    public function update_projects(Request $request, $id){

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'lang' => 'required',
            'photo' => 'required'
        ]);

        $project =  Projects::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->repo_url = $request->repo_url;
        $project->link = $request->link;

        $image = $request->file('photo');
        //$image_name = $image->getClientOriginalName();
        $filename = 'profile-photo-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/assests/projects'),$filename);
        $image_path = "/assests/projects/" . $filename;
        //dd($image);

        $project->img = $image_path;
        $project->visit = $request->visit;
        $project->lang = $request->lang;
        $project->rep_visit = $request->rep_visit;
        $project->update();

        session()->flash('msg', 'Project Edited Successfully');
        return redirect()->back();
    }



}
