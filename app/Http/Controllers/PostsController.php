<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //prevent guests from doing CRUD operations
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'asc')->get();
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index',compact('posts','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        // create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        // create tag
        $newTags= explode(',',preg_replace('/\s+/', '', $request->input('tag')));
        $newTags=array_unique ($newTags);

        foreach ($newTags as $id => $name) {
            if($name == '')
                continue;
            // check if tag already exist
            $prevTag = Tag::where('name','=', $name)->first();
            if($prevTag and ($prevTag->name !== '')){
                $tag = Tag::where('name','=', $name)->get('id');
                $post->tags()->attach($tag);
                continue;
            }

            $tag = new Tag;
            $tag->name=$name;
            $tag->save();
            $post->tags()->attach($tag);
        };
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($request->id);
        $post = Post::find($id);
        if($post==null)
            return redirect('/posts')->with('error','There is no post with this ID');
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $postTags=[];
        foreach ($post->tags as $id => $tag) {
            $postTags[] = $tag->name;
        }
        $postTags = implode(' , ', $postTags);
        // dd($postTags);
        if (Auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized Page!');
        }
        return view('posts.edit',compact('post','postTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);


        // create post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        foreach ($post->tags as $id => $postTag) {
            $post->tags()->detach($postTag);
            if(count($postTag->posts)==0)
                $postTag->delete();
        }



        // create tag
        $newTags= explode(',',preg_replace('/\s+/', '', $request->input('tag')));
        $newTags=array_unique ($newTags);
        // dd($newTags);
        foreach ($newTags as $id => $name) {
            if($name == '')
                continue;
            // check if tag already exist
            $prevTag = Tag::where('name','=', $name)->first();
            if($prevTag and ($prevTag->name !== '')){
                $tag = Tag::where('name','=', $name)->get('id');
                $post->tags()->attach($tag);
                continue;
            }

            $tag = new Tag;
            $tag->name=$name;
            $tag->save();
            $post->tags()->attach($tag);
        };

        return redirect('/posts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (Auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized Page!');
        }

        foreach ($post->tags as $id => $postTag) {
            $post->tags()->detach($postTag);
            if(count($postTag->posts)==0)
                $postTag->delete();
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
