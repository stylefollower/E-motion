<!--@extends('welcome')

@section('content')
@endsection

-->

<html>
 <h2>{{$post->title}}</h2>
<p>{{$post->content}}<br>
{{$post->author}}<br>
{{$post->category}}<br>
{{$post->description}}<br>
{{$post->created_at->diffForHumans()}}<br></p>

<ul>
    @foreach ($posts as $post)
        <li>
            <b><a href="/admin/{{$post->id}}">{{$post->title}}:</a></b><br>
            {{$post->content}}<br>
            created by: <strong>{{$post->author}}</strong>
            {{$post->created_at->diffForHumans()}}<br>
        </li><br>
    @endforeach
</ul>




<form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('delete')
    <button class="btn" type="submit">Delete</button>
</form> 

</html>

