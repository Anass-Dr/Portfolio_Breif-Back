<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return response()->json(["data" => $formations]);
    }

    public function store(Request $request)
    {
        Formation::create($request->all());
        return response()->json(["message" => "Formation created successfuly"], 201);
    }

    public function update(string $id, Request $request)
    {
        $formation = Formation::find($id);
        $formation->update($request->all());
        return response()->json(["message" => "Formation updated successfuly"], 204);
    }

    public function destroy(string $id)
    {
        Formation::find($id)->delete();
        return response()->json(["message" => "Formation deleted successfuly"]);
    }
}
