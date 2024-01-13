@extends('layouts.app')
@section('title') Index @endsection
@section('indexContent')
<div class="text-center">
<div class="mt-5" align="center">
    <a href="{{route('posts.create')}}" class=""><button type="button" class="btn btn-success">Create Post</button></a>
</div>
<table class="table mt-4 ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Posted by</th>
      <th scope="col">  Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)

    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['Posted by']}}</td>
      <td>{{$post['created at']}}</td>
      <td>
      <a href="{{route('posts.show', $post['id'])}}" class=""><button type="button" class="btn btn-info">View</button></a>
      <a href="{{route('posts.edit',$post['id'])}}" class=""><button type="button" class="btn btn-primary">Edit</button></a>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection

   