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
      <td>{{$post->postedBy}}</td>
      <td>{{$post['created_at']}}</td>
      <td>
      <a href="{{route('posts.show', $post['id'])}}" class=""><button type="button" class="btn btn-info">View</button></a>
      <a href="{{route('posts.edit',$post['id'])}}" class=""><button type="button" class="btn btn-primary">Edit</button></a>
      <form style="display:inline;" method="POST" action="{{route('posts.destroy',$post->id)}}">
        @csrf
        @method('delete')
      <a href="" class=""><button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" class="btn btn-danger" >Delete</button></a>
      </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection

   