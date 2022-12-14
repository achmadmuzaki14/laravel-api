<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileApiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Profile::all();
    }

    public function show(Profile $profile)
    {
        return Profile::where('user_id', 12)->first();
    }

    public function store(Request $request)
    {
        $profile = Profile::create($request->all());

        return response()->json($profile, 201);
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());

        return response()->json($profile, 200);
    }

    public function delete(Profile $profile)
    {
        $profile->delete();

        return response()->json(null, 204);
    }
}
