<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {

    }


    public function create(Request $request)
    {
        $profile = new Profile();
        $id = auth()->user()->id;
        $profile->id = $id;
        $profile->data = json_encode($request);
        $profile->save();
        return $profile;

    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $profile = Profile::where('profileID', $id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Profile not found'], 404);
        }

        return response()->json(['profile' => $profile], 200);
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy(string $id)
    {
        //
    }
}
