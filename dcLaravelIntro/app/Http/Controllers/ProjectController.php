<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

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

    public function store()
    {
        /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/
        Project::create(request()->all());//por asigancion masiva

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
