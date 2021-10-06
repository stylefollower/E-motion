@extends('layouts.nav')

@section('about')

<main role="main">
  

    <section class="jumbotron text-center aboutus">
      <div class="container">
       <h1 class="display-4">About Us</h1>
       <br>
       <p class="h1">e-Motion, passion for electric cars</p>
       <p class="lead">e-motion is a website dedicated to electric vehicles. It was born through the passion of a group of people who wanted to create a virtual place
           for others to share, read and talk about electric vehicles.

           <hr>

           We believe that electric vehicles are the future of your mothers and daughters.

       </p>
       <img src="{{URL::asset('/image/elon.jpg')}}" alt="" width="60%" class="d-inline-block align-text-top">
       <br>
       <br>
       <h1>PRAISE OUR LORD AND SAVIOR ELON</h1>
      </div>

      
    </section>
</main>

    
@endsection