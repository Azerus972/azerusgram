<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
//sould be accessible only if user is logged
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('posts.create');
    }

    //Backoffice require validation
    public function store()
    {
        $data = request()->validate([
            'caption' => ['required', 'string'],
            'image' => ['required', 'image']

        ]);
    //store and save image path
       $imagePath =  request('image')->store('uploads', 'public');

    //Link the post to the user
       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath
       ]);

       return redirect()->route('profiles.show', ['user' => auth()->user()]);
    }
}
