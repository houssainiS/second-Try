<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts =[
            ['id'=>1,'title'=>'PHP','Posted by'=>'ahmed','created at'=>'12-1-2024'],
        ['id'=>2,'title'=>'business','Posted by'=>'aymen','created at'=>'1-1-2024'],
        ['id'=>3,'title'=>'history','Posted by'=>'yamen','created at'=>'3-1-2024'],
        ['id'=>4,'title'=>'nuclear','Posted by'=>'hitler','created at'=>'3-3-1950']
    ];
        return view('posts.index',['posts'=>$allPosts]);
    }
    public function show($postid){
        $singlePost=['id'=>1,'title'=>'PHP','Posted by'=>'ahmed','desc'=>"hello guys ! how r y'all",'created at'=>'12-1-2024'];
        return view('posts.show' , ['post'=>$singlePost]);
    }
}