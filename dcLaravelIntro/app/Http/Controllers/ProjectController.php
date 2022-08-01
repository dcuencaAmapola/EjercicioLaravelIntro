<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        //$portfolio = DB::table('projects')->get();//query selector
        //$projects = Project::get();//eloquent
        //$portfolio = Project::orderBy('created_at', 'DESC')->get();//ordena por fecha
        //$portfolio = Project::latest('updated_at')->get();//ordena por fecha pero simplificado, utiliza created at por default sino se le pasa por parametro
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request)
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
