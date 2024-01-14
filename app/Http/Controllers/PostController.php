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
        $email=request()->email;
        $desc=request()->desc;
        $user=request()->user;
        //dd($data,$email,$desc,$user);
         return to_route('posts.index');
    }
    public function edit(){
        return view('posts.edit');
    }
    public function update(){
        $email=request()->email;
        $desc=request()->desc;
        $user=request()->user;
        return to_route('posts.show',1);
    }
    public function destroy(){
        return to_route('posts.index');
    }
}