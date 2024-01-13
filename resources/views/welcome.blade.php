@extends('layouts.app')
@section('title')welcome @endsection
@section('welcomeContent')
    alhamdulila
<center>   <a href="{{route('posts.index')}}" class=""><button type="submit" class="btn btn-danger" >go</button></a>
</center>
@endsection