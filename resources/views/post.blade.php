@extends('layouts.nav')

@section('post')
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading my-3">Single Post Example</h1>
      <br>
      <img class="img-fluid   my-2" src="{{URL::asset('/image/car1.jpg')}}" alt="main site image">
      
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      <p>
          
        
        

      </p>
    </div>
  </section>
  <section class="jumbotron text-center">
    <div class="container">
      <h2 class=" jumbotron-heading my-5">Example body text</h2>
      <p class="h2">Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        
        <hr>

        <p>Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

        <hr>

        <img src="{{URL:: asset('/image/art1.png') }}" alt="" class="img-fluid">

        <br>
        <br>
        <p class="h4 my-3">Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
    </div>
  </section>

  <section class="jumbotron">
    <div class="container">
      <H1>COMMENTS</H1>
      <br>
      <h4>Gonzalo</h4>
      <br>
      <div class="card border-primary mb-3" style="max-width: 50vw;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Primary card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  </section>
  
</main>
@endsection