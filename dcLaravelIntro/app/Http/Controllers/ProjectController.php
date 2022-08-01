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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
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
