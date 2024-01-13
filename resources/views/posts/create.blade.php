@extends('layouts.app')
@section('title')creation @endsection
@section('createContent')


<form class="mt-4 m-5" method="POST" action="{{route('posts.store')}}">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-floating mb-3">
  <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Description</label>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Post Creator</label>
    <input type="text" class="form-control" name="user" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection