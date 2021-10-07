@extends('layouts.nav')

@section('welcome')

@section('title')
Add New Post

@endsection

@section('content')

<section class="jumbotron text-center bg-dark login">
    <div class="container">
      
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create a Post') }}</div>
    
                    <div class="card-body">
                        <form action="/new-post" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group">
                            
                            <input required="required" value="" placeholder="Enter title here" type="text" name = "title"class="form-control" />
                            
                            </div>
                            
                            <div class="form-group">
                            
                            <textarea name='description' placeholder="Enter content here" class="form-control" style="height: 30vh;"></textarea>
                            
                            </div>
                            
                            
                            <input type="submit" name='submit' class="btn btn-default" value = "Submit"/>
                            
                            </form>
                            
                    </div>
                </div>
            </div>
        </div>
        <br>
        <section>
            
        </section>
    </div>
    </section>



@endsection