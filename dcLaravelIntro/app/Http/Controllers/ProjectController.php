<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('active', 1)->get();

        //$portfolio = DB::table('projects')->get();//query selector
        //$projects = Project::get();//eloquent
        //$portfolio = Project::orderBy('created_at', 'DESC')->get();//ordena por fecha
        //$portfolio = Project::latest('updated_at')->get();//ordena por fecha pero simplificado, utiliza created at por default sino se le pasa por parametro
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/

        /*$fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);//si se valida ya no necesiamo modificar el modelo con el fillable - ya lo hace la clase request autmaticamente*/
        $fields = $request->validated();
        Project::create($fields);//por asigancion masiva

        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show',$project);
    }

    public function destroy(Project $project)
    {
        //Project::destroy($project);
        //$project->delete();
        //dd($project);
        $project->update([
            'active' => 0,
        ]);
        //return $project;
        return redirect()->route('projects.index');
    }
}
