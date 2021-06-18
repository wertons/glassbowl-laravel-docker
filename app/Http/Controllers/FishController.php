<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolCheckPublicRequest;
use App\Models\Fish;
use App\Models\School;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($schoolId)
    {
        $fishs = Fish::where('school_id', $schoolId)->get();
        $school = School::findOrFail($schoolId);

        return Inertia::render('FishIndex', [
            'fishs' => $fishs,
            'school' => $school
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexShared(SchoolCheckPublicRequest $request, $schoolId)
    {
        $fishs = Fish::where('school_id', $schoolId)->get();

        $school = School::findOrFail($schoolId);

        return Inertia::render('FishIndexShared', [
            'fishs' => $fishs,
            'school' => $school
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($schoolId)
    {
        $school = School::findOrFail($schoolId);

        return Inertia::render('FishCreate', [
            'school' => $school
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($schoolId, Request $request)
    {
        try {
            Fish::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'url' => $request->input('url'),
                'school_id' => $schoolId
            ]);
        } catch (QueryException $e) {
            return redirect()->route('fish.index', ['school' => $schoolId])->with([
                'error' => __('Could not create the fish')
            ]);
        }
        return redirect()->route('fish.index', ['school' => $schoolId])->with([
            'success' => __('The fish has been created')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($schoolId, $fishId)
    {
        $school = School::findOrFail($schoolId);
        $fish = Fish::findOrFail($fishId);

        return Inertia::render('FishEdit', [
            'school' => $school,
            'fish' => $fish
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($schoolId, $fishId, Request $request)
    {
        $fish = fish::findOrFail($fishId);

        try {
            $fish->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'url' => $request->input('url'),
                'school_id' => $schoolId
            ]);
        } catch (QueryException $e) {
            return redirect()->route('fish.index', ['school' => $schoolId])->with([
                'error' => __('Could not update the fish')
            ]);
        }
        return redirect()->route('fish.index', ['school' => $schoolId])->with([
            'success' => __('The fish has been updated')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($schoolId, $fishId)
    {
        $school = School::findOrFail($schoolId);
        Fish::find($fishId)->delete();
        return redirect()->route('fish.index', ['school' => $school->id]);
    }
}
