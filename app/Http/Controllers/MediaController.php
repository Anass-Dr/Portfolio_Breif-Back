<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return response()->json(["data" => $media]);
    }

    public function store(Request $request)
    {
        if ($request->type === "link") {
            Media::create($request->all());
            return response()->json(["message" => "Media created successfuly"], 201);
        }
        if ($request->type === "upload") {
            $file = $request->file('file');

            if (!$file->isValid()) {
                return response()->json(['error' => 'Invalid file upload'], 422);
            }

            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('public')->put($fileName, file_get_contents($file->getRealPath()));
            return response()->json(["message" => "Media created successfuly"], 201);
        }

        return response()->json(["message" => "Something wrong"], 401);
    }

    public function destroy(string $id)
    {
        Media::find($id)->delete();
        return response()->json(["message" => "Media deleted successfuly"]);
    }
}
