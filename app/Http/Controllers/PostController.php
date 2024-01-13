<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{
    public function index(){
        $postFromDB=Post::all();
        //dd($postFromDB);
      
        return view('posts.index',['posts'=>$postFromDB]);
    }
    public function show($postid){
        $singlePost=['id'=>1,'title'=>'PHP','Posted by'=>'ahmed','desc'=>"hello guys ! how r y'all",'created at'=>'12-1-2024'];
        return view('posts.show' , ['post'=>$singlePost]);
    }
    public function create(){
        return view('posts.create');
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