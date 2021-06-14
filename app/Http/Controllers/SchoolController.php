<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolManagementRequest;
use App\Http\Requests\ShareRequest;
use App\Http\Requests\TeamRequest;
use App\Models\School;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::where('user_id', auth()->user()->id)->get();

        return view('schools.index', [
            'schools' => $schools,
            'team' => null
        ]);
    }

    public function teamIndex(TeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        $schools = School::where('team_id', $id)->paginate(config('crud.paginate'));

        return view('schools.index', [
            'schools' => $schools,
            'team' => $team
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create', [
            'team' => null
        ]);
    }

    public function teamCreate($id)
    {
        $team = Team::findOrFail($id);

        return view('schools.create', [
            'team' => $team
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            School::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id
            ]);
        } catch (QueryException $e) {
            return redirect()->route('schools.index')->with('error', __('Could not create the school'));
        }
        return redirect()->route('schools.index')->with('success', __('The school has been created'));
    }

    public function teamStore($id, Request $request)
    {
        $team = Team::findOrFail($id);
        try {
            School::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'team_id' => $team->id
            ]);
        } catch (QueryException $e) {
            return redirect()->route('schools.teamIndex', ['team' => $team])->with('error', __('Could not create the school'));
        }
        return redirect()->route('schools.teamIndex', ['team' => $team])->with('success', __('The school has been created'));
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
    public function edit(SchoolManagementRequest $request, $id)
    {
        $school = School::findOrFail($id);
        return view('schools.edit', [
            'school' => $school,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolManagementRequest $request, $id)
    {
        $school = School::findOrFail($id);
        try {
            $school->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        } catch (QueryException $e) {
            if ($school->user_id != null) {
                return redirect()->route('schools.index')->with('error', __('Could not update the school'));
            } else {
                $team = Team::findOrFail($school->team_id);
                return redirect()->route('schools.teamIndex', ['team' => $team])->with('error', __('Could not update the school'));
            }
        }
        if ($school->user_id != null) {
            return redirect()->route('schools.index')->with('error', __('The school has been updated'));
        } else {
            $team = Team::findOrFail($school->team_id);
            return redirect()->route('schools.teamIndex', ['team' => $team])->with('error', __('The school has been updated'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolManagementRequest $request, $id)
    {
        School::find($id)->delete();
        return redirect()->route('schools.index');
    }

    public function share(ShareRequest $request, $id)
    {
        $school = School::findOrFail($id);

        try {
            $school->update([
                'shared' => true
            ]);
        } catch (QueryException $e) {
            return redirect()->route('schools.index')->with('error', __('Could not share the school'));
        }
        return redirect()->back();
    }

    public function unshare(ShareRequest $request, $id)
    {
        $school = School::findOrFail($id);

        try {
            $school->update([
                'shared' => false
            ]);
        } catch (QueryException $e) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function marketplace()
    {
        $schools = School::where('shared', true)->where('user_id', '!=', auth()->user()->id)->get();

        return view('schools.marketplace', [
            'schools' => $schools,
        ]);
    }

    public function getSchool($id)
    {
        $school = School::findOrFail($id);
        $user = User::findOrFail(auth()->user()->id);

        try {
            $school->users()->attach($user);
        } catch (QueryException $e) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function cancelDownloadSchool($id)
    {
        $school = School::findOrFail($id);
        $user = User::findOrFail(auth()->user()->id);

        try {
            $school->users()->detach($user);
        } catch (QueryException $e) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function downloadedSchools()
    {
        $user = User::findOrFail(auth()->user()->id);

        $schools  = (new School)->newCollection();
        foreach ($user->sharedSchools as $school) {
            $schools->add($school);
        }
        return view('schools.downloadedSchools', [
            'schools' => $schools,
        ]);
    }
}
