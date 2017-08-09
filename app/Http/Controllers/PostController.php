<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $posts = Post::orderBy('id','desc')->get();
//หรือ
    // $posts = Post::latest()->get();

    return view('posts.index' ,compact('posts'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

    // $posts = Posts::where('title', 'ff')->get();
    // dd($posts);
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
    //dd(request()->all()); show all data in array
    // $posts = new Post;
    // $posts->title = request('title');
    // $posts->body = request('body');
    // $posts->save();
    //
    $this->validate(request(), [
     'title' => 'required',//     'titile' => 'required|max10',

     'body' => 'required'
    ]);
// Post::create(request(['title','body']));
    Post::create([
      'title' => request('title'),
      'body' => request('body')

    ]);
    return redirect('/');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Post $post)
  {


    return view('posts.show',compact('post'));

  }
  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
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
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
