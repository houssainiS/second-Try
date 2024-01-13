@extends('layouts.app')
@section('title') Show @endsection
@section('showContent')


<div class="card mt-5 ">
  <div class="card-header">
    {{$post['postedBy']}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->desc}}</p>
  </div>
</div>

@endsection
    
