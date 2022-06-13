<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index', [
            'blogs' => blog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create', [
            "categories" => Category::all()
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
        // dd($request->all());
        $slug = Str::slug($request->title) . "_" . Str::random(9);

        $request->validate([
            'title'        => 'required',
            'description'  => 'required',
            'blog_photo'   => 'required|image',
        ]);

        $blog = Blog::create($request->except('_token') + [
            'created_at'  => Carbon::now(),
            'user_id'     => Auth::id(),
            'slug'        => $slug,
            'editor_photo'=> "default.png"
        ]);

        if($request->hasFile('blog_photo')){
            $blog_photo       = $request->file('blog_photo');
            $fileName         = uniqid() . "." . $blog_photo->extension();
            $location         = public_path('uploads/blog_photos');
            $blog->blog_photo = $fileName;
            
            $blog_photo->move($location, $fileName);
        }

        if($request->hasFile('editor_photo')){
            $editor_photo       = $request->file('editor_photo');
            $fileName         = uniqid() . "." . $editor_photo->extension();
            $location         = public_path('uploads/editor_photos');
            $blog->editor_photo = $fileName;

            $editor_photo->move($location, $fileName);
        }

        $blog->save();

        return redirect()->route('blog.index')->withSuccess('Blog Created Success !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blog.edit', compact('blog', 'categories'));
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
        $request->validate([
            'title'        => 'required',
            'description'  => 'required',
            'blog_photo'   => 'required|image',
        ]);

        $blog->update($request->except('_token') + [
            'created_at'  => Carbon::now(),
            'user_id'     => Auth::id(),
            'editor_photo'=> "default.png"
        ]);

        if($request->hasFile('blog_photo')){
            $blog_photo       = $request->file('blog_photo');
            $fileName         = uniqid() . "." . $blog_photo->extension();
            $location         = public_path('uploads/blog_photos');
            $blog->blog_photo = $fileName;
            
            $blog_photo->move($location, $fileName);
        }

        if($request->hasFile('editor_photo')){
            $editor_photo       = $request->file('editor_photo');
            $fileName         = uniqid() . "." . $editor_photo->extension();
            $location         = public_path('uploads/editor_photos');
            $blog->editor_photo = $fileName;

            $editor_photo->move($location, $fileName);
        }

        $blog->save();

        return redirect()->route('blog.index')->withSuccess('Blog Updated Success !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->withDanger('Blog Deleted Success !');
    }
}
