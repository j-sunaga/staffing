<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    /**
     * UserAuthentication
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $categories = Category::all();

        return view('posts.create', compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->deadline = $request->input('deadline');
        $post->status = $request->input('status');
        $post->priority = $request->input('priority');

        $post->user_id = Auth::id();

        $post->save();

        $post->categories()->sync($request->get('category', []));

        return redirect()->route('posts.show', ['post' => $post, 'id' => $post->id]);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

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
        $categories = Category::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->deadline = $request->input('deadline');
        $post->status = $request->input('status');
        $post->priority = $request->input('priority');

        $post->save();

        $post->categories()->sync($request->get('category', []));

        return redirect()->route('posts.show', ['post' => $post, 'id' => $post->id]);;
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

        $post->delete();

        return redirect('posts');
    }
}
