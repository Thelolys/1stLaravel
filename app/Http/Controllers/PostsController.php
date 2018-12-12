<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use PhpParser\Node\Stmt\Return_;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
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
            'title'=>'required',
            'model'=>'required',
            'date'=>'required',
            'body'=>'required'
        ]);
        //Create post
        $post= new Post;
        $post ->title =$request -> input('title');
        $post ->model =$request -> input('model');
        $post ->date =$request -> input('date');
        $post ->body =$request -> input('body');
        $post ->user_id = auth()->user()->id;
        $post ->save();

        return redirect('/home')->with('success','Post created');

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
        return view('posts.show')->with('post',$post);
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

        //check for correct user
        if (auth()->user()->id !==$post->user_id){
            return redirect('/home')->with('error','Unauthorized page');
        }
        return view('posts.edit')->with('post',$post);
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
            'title'=>'required',
            'model'=>'required',
            'date'=>'required|date|date_format:Y-m-d|after:yesterday',
            'body'=>'required',

        ]);

        $post= Post::find($id);
        $post ->title =$request -> input('title');
        $post ->model =$request -> input('model');
        $post ->date =$request -> input('date');
        $post ->body =$request -> input('body');
        $post ->save();
        return redirect('/home')->with('success','Reservation updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        if (auth()->user()->id !==$post->user_id){
            return redirect('/home')->with('error','Unauthorized page');
        }
        $post->delete();
        return redirect('/home')->with('success','Reservation removed');
    }
    //atlauja taisit ierakstus tikai kas ir ielogojies
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

    }
}
