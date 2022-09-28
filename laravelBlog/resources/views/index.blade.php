@extends('layouts.app')
@section('content')
{{-- @include('blog.css') --}}

<link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <div class="section" >


        <div class=" card mb-3 mt-1" style="max-width: 2000px;">
            <div class="row g-0">
              <div class="col-md--5">
                <img src="/images/laptop5.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-5">
                <div class="card-body">
                  
                </div>
              </div>
            </div>
          </div>

        
      

          <div  class="centa" >
          
              <center>
                <h1 > DO YOU WANT TO BECOME A DEVELOPER?</h1>
                        <a href="/blog" style="background: white" >read more</a>
                 </center>
           
        </div>
             
      
        
            </div>
          </div>
        
    </div>


<div class="card2">

    <div class=" card mb-3 mt-6" style="max-width: 2000px;">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="/images/laptop3.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <h2 class="card-title">Are You Facing Chalenges of becoming
            a Web Developer?</h2>

              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                 additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
</div>
    






  </div>

  <div class="card text-bg-light mb-3" style="max-width: 79rem;">
    <div class="latest-posts">
 <h2 class="card-header">Latest Post</h2>
    <div class="card-body">
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
         Quibusdam iure ullam voluptate? Sint distinctio magni cum aut iusto enim ipsa,
         vitae sit itaque porro dolores assumenda minima rem similique eos?</p>
    </div>
  </div>
    </div>
   


    <div class="card2">

        <div class=" card mb-3 mt-6" style="max-width: 2000px;">
            <div class="row g-0">

                <div class="col-md-5">
                    <div class="card-body">
                      <h2 class="card-title">Are You Facing Chalenges of becoming
                    a Web Developer?</h2>
        
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                         additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <a href="/blog"><button class="btn btn primary">Read More</button></a>
                    </div>
                  </div>
                  
              <div class="col-md-6">
                <img src="/images/laptop2.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              
            </div>
          </div>
    </div>
        

@endsection