<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SI houssaini</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">All Posts</a>
        </li>
        
  </div>
</nav>
</header>
<div class="text-center">
<div class="mt-5" align="center">
    <button type="button" class="btn btn-success">Create Post</button>
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
      <a href="{{route('test')}}" class=""><button type="button" class="btn btn-primary">Edit</button></a>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>