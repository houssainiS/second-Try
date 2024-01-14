@extends('layouts.app')
@section('title')creation @endsection
@section('createContent')


<form class="mt-4 m-5" method="POST" action="{{route('posts.store')}}">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-floating mb-3">
  <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Description</label>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Post Creator</label>
    <select class="form-control" name="postedBy" >
      @foreach($users as $user)
      <option value="{{$user->name}}" name="user">{{$user->name}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection