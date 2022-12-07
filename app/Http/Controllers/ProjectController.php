<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user())
            return view('project-create');
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
        if ($request->hasFile('image1') && $request->hasFile('image2') && $request->hasFile('image3') && $request->hasFile('image4')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    "image1" => 'required|mimes:jpeg,png,jpg|max:10094',
                    "image2" => 'required|mimes:jpeg,png,jpg|max:10094',
                    "image3" => 'required|mimes:jpeg,png,jpg|max:10094',
                    "image4" => 'required|mimes:jpeg,png,jpg|max:10094',
                    'title' => 'required|string|max:255',
                    'category' => 'required|string|max:20',
                    'client' => 'required|string|max:50',
                    'end_date' => 'required',
                    "discription" => 'required',
                    'link' => 'required|url',
                ]);
                $path1 = $request->image->store('images');
                $path2 = $request->image->store('images');
                $path3 = $request->image->store('images');
                $path4 = $request->image->store('images');

                $project = \App\Models\Project::create([
                    "image1" => $path1,
                    "image2" => $path2,
                    "image3" => $path3,
                    "image4" => $path4,
                    'title' => $validated['title'],
                    'category' => $validated['category'],
                    'title' => $validated['title'],
                    'client' => $validated['client'],
                    'end_date' => Carbon::createFromFormat('m/d/Y', $validated['end_date']),
                    'link' => $validated['link'],
                    "discription" => $validated['discription'],
                ]);

                if ($project) {
                    return redirect(route('projects.index'));
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project-details', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
