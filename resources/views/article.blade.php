@extends('welcome')

@section('content')




<hr>

<br>
<h1><strong>Posts</strong></h1>
<br>

<ul>
    @foreach ($posts as $post)
        <li>
            <b><a href="/posts/{{$post->id}}">{{$post->title}}:</a></b><br>
            {{$post->content}}<br>
            created by: <strong>{{$post->author}}</strong>
            {{$post->created_at->diffForHumans()}}<br>
        </li><br>
    @endforeach
</ul>


@endsection



@endsection
