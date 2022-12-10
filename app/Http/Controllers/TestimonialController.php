<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()) {
            $projects = Project::all();
            return view('teastimonial-create', compact('projects'));
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
                    "project_id" => 'required|numeric',
                    "image" => 'required|mimes:jpeg,png,jpg|max:10094',
                    "career" => 'required|string|max:255',
                    "name" => 'required|string|max:255',
                    "rating" => 'required|integer|min:0|max:5',
                    "testimony" => 'required',
                ]);
                $path = $request->image->store('images');

                $testimonial = \App\Models\Testimonial::create([
                    'project_id' => $validated['project_id'],
                    'career' => $validated['career'],
                    'name' => $validated['name'],
                    'rating' => $validated['rating'],
                    "image" => $path,
                    "testimony" => $validated['testimony'],
                ]);

                if ($testimonial) {
                    return redirect(route('testimonials.index'));
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
