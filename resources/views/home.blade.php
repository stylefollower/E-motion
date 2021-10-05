@extends('layouts.nav')

@section('content')

<section class="jumbotron text-center">
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <h1>NAME: </h1> <p>Gonzalo</p>
                        <br>
                        <h1>EMAIL</h1> <p>g@g.g</p>
                        <br>
                        <h1>PASSWORD</h1> <p>lul</p>
                        <br>
                        <h1>MORE INFO</h1> <p>admin</p>
                    </div>
                    {{ __('You are logged in!') }}
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

