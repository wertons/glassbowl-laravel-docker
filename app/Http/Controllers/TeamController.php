<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TeamRequest $request)
    {
        $teams = Team::whereHas('users', function ($query) {
            return $query->where('id', auth()->user()->id);
        })->get();

        return view('teams.index', [
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TeamRequest $request)
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        try {
            $team = Team::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);
            $team->users()->attach($user, ['isOwner' => true, 'joined' => true]);
        } catch (QueryException $e) {
            return redirect()->route('teams.index')->with('error', __('Could not create the team'));
        }
        return redirect()->route('teams.index')->with('success', __('The team has been created'));
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
    public function edit(TeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', [
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        try {
            $team->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);
        } catch (QueryException $e) {
            return redirect()->route('teams.index')->with('error', __('Could not update the team'));
        }
        return redirect()->route('teams.index')->with('success', __('The team has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamRequest $request, $id)
    {
        Team::find($id)->delete();
        return redirect()->route('teams.index');
    }

    public function members(TeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);

        return view('teams.members', [
            'team' => $team,
        ]);
    }

    public function invite(TeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);

        return view('teams.invite', [
            'team' => $team,
        ]);
    }

    public function sendInvite($id, TeamRequest $request)
    {
        $team = Team::findOrFail($id);

        $user = User::where('email', $request->input('email'))->get();

        $team->users()->attach($user);

        return view('teams.members', [
            'team' => $team,
        ]);
    }

    public function invitations()
    {
        $teams = Team::whereHas('users', function ($query) {
            return $query->where('id', auth()->user()->id);
        })->get();

        return view('teams.invitations', [
            'teams' => $teams,
        ]);
    }

    public function accept($id)
    {
        $team = Team::findOrFail($id);
        $user = auth()->user();

        $team->users()->detach($user);
        $team->users()->attach($user, ['joined' => true]);

        return redirect()->route('teams.invitations');
    }

    public function decline($id)
    {
        $team = Team::findOrFail($id);
        $user = auth()->user();

        $team->users()->detach($user);

        return redirect()->route('teams.invitations');
    }
}
