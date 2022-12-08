<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaAddress;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()) {
            $users = User::all();
            $medias = [
                'facebook',
                'linkedin',
                'twitter',
                'instagram'
            ];
            return view('team-create', compact('users', 'medias'));
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'career' => 'required|string|max:255',
                    "image" => 'required|mimes:jpeg,png,jpg|max:10094',
                    "user_id" => 'required|numeric',
                    'facebook' => 'url|nullable',
                    'linkedin' => 'required|url',
                    'twitter' => 'url|nullable',
                    'instagram' => 'url|nullable'
                ]);
                $path = $request->image->store('images');

                $team = \App\Models\Team::create([
                    'career' => $validated['career'],
                    'user_id' => $validated['user_id'],
                    "image" => $path,
                ]);

                if ($team) {
                    SocialMediaAddress::create(['media' => 'linkedin', 'url' => $validated['linkedin'], 'team_id' => $team->id]);
                    if ($validated['facebook'])
                        SocialMediaAddress::create(['media' => 'facebook', 'url' => $validated['facebook'], 'team_id' => $team->id]);
                    if ($validated['twitter'])
                        SocialMediaAddress::create(['media' => 'twitter', 'url' => $validated['twitter'], 'team_id' => $team->id]);
                    if ($validated['instagram'])
                        SocialMediaAddress::create(['media' => 'instagram', 'url' => $validated['instagram'], 'team_id' => $team->id]);
                    return redirect(route('teams.index'));
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
