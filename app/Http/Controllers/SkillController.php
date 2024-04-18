<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return response()->json(["data" => $skills]);
    }

    public function store(Request $request)
    {
        Skill::create($request->all());
        return response()->json(["message" => "Skill created successfuly"], 201);
    }

    public function update(string $id, Request $request)
    {
        $skill = Skill::find($id);
        $skill->update($request->all());
        return response()->json(["message" => "Skill updated successfuly"], 204);
    }

    public function destroy(string $name)
    {
        Skill::where('name', $name)->first()->delete();
        return response()->json(["message" => "Skill deleted successfuly"], 204);
    }
}
