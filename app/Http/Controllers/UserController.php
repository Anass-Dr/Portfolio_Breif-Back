<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(["data" => User::all()[0]]);
    }

    public function update(Request $request)
    {
        User::all()[0]->update($request->all());
        return response()->json(["message" => "user info updated"], 201);
    }
}
