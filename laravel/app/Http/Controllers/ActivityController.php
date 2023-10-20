<?php
// app/Http/Controllers/ActivityController.php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return response()->json(['data' => $activities]);
    }

    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return response()->json(['data' => $activity]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $activity = Activity::create($data);

        return response()->json(['data' => $activity], 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update($data);

        return response()->json(['data' => $activity]);
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return response()->json(['message' => 'Activity deleted']);
    }
}
