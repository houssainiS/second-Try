<h1>test</h1>
@php $name='houssaini' ; $books =["PHP","JAVA","CSS"];@endphp
<p>SI {{$name}}</p>
@foreach($books as $book)
<li>{{$book}}</li>
@endforeach