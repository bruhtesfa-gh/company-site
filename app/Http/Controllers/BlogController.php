<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user())
            return view('blog-create');
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
                    'title' => 'required|string|max:255',
                    "image" => 'required|mimes:jpeg,png,jpg|max:10094',
                    "subtitle" => 'required|string|max:255',
                    "discription" => 'required',
                    'link' => 'nullable|url',
                ]);
                $path = $request->image->store('images');

                $blog = \App\Models\Blog::create([
                    'title' => $validated['title'],
                    'subtitle' => $validated['subtitle'],
                    'link' => $validated['link'],
                    "image" => $path,
                    "discription" => $validated['discription'],
                    'post_man' => User::find(Auth::user()->id)->name,
                ]);

                if ($blog) {
                    return redirect(route('blogs.index'));
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $max_post = Blog::all()->last()->id;
        $latests = Blog::latest()->take(5)->get();
        return view('blog-details', compact('blog', 'max_post', 'latests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
