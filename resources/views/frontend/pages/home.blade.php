@extends('frontend.app')
@section('content')
<div class="hero-title">
  <div class="hero-title2" >
     <h1>
        <span class="auto-input"></span>
     </h1>
     <p>Music is the art of arranging sounds in time through the elements of melody, harmony, rhythm, and timbre.[1][2] It is one of the universal cultural aspects of all human societies. <span class="half-hero">General definitions of music include common elements such as pitch (which governs melody and harmony), rhythm (and its associated concepts tempo, meter, and articulation), dynamics (loudness and softness), and the sonic qualities of timbre and texture</span></p>
  </div>
</div>
<div class="slider">
    
    <div class="card card-1 mx-5" style="width: 20rem">
       <a href="">
        <img  src="https://images.pexels.com/photos/4200745/pexels-photo-4200745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
       </a>
       
      </div>
      <div class="card  card-1 mx-5" style="width: 20rem">
       <a href="">
        <img  src="https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg" class="card-img-top" alt="...">
       </a>
       
      </div>
      <div class="card  card-1 mx-5" style="width: 20rem">
        <a href="">
            <img  src="https://images.pexels.com/photos/761963/pexels-photo-761963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
        </a>
       
      </div>
      <div class="card  card-1 mx-5" style="width: 20rem">
       <a href="">
        <img  src="https://images.pexels.com/photos/374703/pexels-photo-374703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
       </a>
       
      </div>  
      <div class="card  card-1 mx-5" style="width: 20rem">
       <a href="">
        <img  src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
       </a>
       
      </div>





</div>
{{-- Slick SLider Ends --}}
<div class="space">

</div>
{{-- Trending Songs --}}
<div class="container">
<div class="trending-bar">
    <h1>Trending</h1>
    <a href="">View all</a>
  </div>
  @include('frontend.components.card')


</div>
<div class="space">

</div>
<div class="container">
<div class="trending-bar">
    <h1>New Releases</h1>
    <a href="">View all</a>
  </div>
  @include('frontend.components.card')


</div>
<div class="space"></div>
<div class="container">
<div class="trending-bar">
    <h1>Top Charts</h1>
    <a href="">View all</a>
  </div>
  @include('frontend.components.card')


</div>
<div class="space"></div>
<div class="container">
<div class="trending-bar">
    <h1>Top Playlists</h1>
    <a href="">View all</a>
  </div>
  @include('frontend.components.card')


</div>
<div class="space"></div>
<div class="container">
<div class="trending-bar">
    <h1>Top Albums</h1>
    <a href="">View all</a>
  </div>
  @include('frontend.components.card')


</div>
<div class="space"></div>
<div class="container">
<div class="trending-bar">
    <h1>Top Bands</h1>
    <a href="">View all</a>
  </div>
 
  @include('frontend.components.card')


</div>
<div class="space"></div>
@endsection