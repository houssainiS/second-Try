<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\user;
class PostController extends Controller
{
    public function index(){
        $postFromDB=Post::all();
        //dd($postFromDB);
      
        return view('posts.index',['posts'=>$postFromDB]);
    }
    public function show($postId){ //you can also use route model binding video at 4:46
        $singlePost=Post::find($postId);
        if(is_null($singlePost)){
            return to_route('posts.index');
        }else{
       
       //$singlePost=Post::where('id',$postId)->first();
       //$singlePost=Post::where('id',$postId)->get();
        return view('posts.show' , ['post'=>$singlePost]);
    }
    }
    public function create(){
        $allusers=User::all();
        return view('posts.create',['users'=>$allusers]);
    }
    public function store(){
        $data= request()->all();
        $title=request()->title;
        $desc=request()->desc;
        $postedBy=request()->postedBy;
      // dd($data,$title,$desc,$postedBy);

//saving to dataBase
        $post =new Post;
        $post->title=$title;
        $post->desc=$desc;
       $post->postedBy=$postedBy;
      //  dd($title,$desc,$postedBy);
        $post->save();

         return to_route('posts.index');
    }
    public function edit(Post $post){
        $allusers=User::all();

        return view('posts.edit',['users'=>$allusers , 'post'=>$post]);
    }
    public function update($postId){
        $singlePost = Post::find($postId);

        $data= request()->all();
        $title=request()->title;
        $desc=request()->desc;
        $postedBy=request()->postedBy;
        $singlePost->update(['title'=>$title , 'desc'=>$desc , 'postedBy'=>$postedBy]);
        return to_route('posts.show',$postId );
    }
    public function destroy(){
        return to_route('posts.index');
    }
}