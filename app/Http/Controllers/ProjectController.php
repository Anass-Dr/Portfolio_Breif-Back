<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json(["data" => $projects]);
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return response()->json(["message" => "Project created successfuly"], 201);
    }

    public function update(string $id, Request $request)
    {
        $project = Project::find($id);
        $project->update($request->all());
        return response()->json(["message" => "Project updated successfuly"], 204);
    }

    public function destroy(string $id)
    {
        Project::find($id)->delete();
        return response()->json(["message" => "Project deleted successfuly"]);
    }
}
