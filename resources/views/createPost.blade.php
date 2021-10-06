@extends('layouts.nav')

@section('welcome')
    
@section('title')
Add New Post

@endsection

@section('content')

<form action="/new-post" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

<input required="required" value="" placeholder="Enter title here" type="text" name = "title"class="form-control" />

</div>

<div class="form-group">

<textarea name='description'class="form-control"></textarea>

</div>


<input type="submit" name='submit' class="btn btn-default" value = "Submit"/>

</form>

@endsection
