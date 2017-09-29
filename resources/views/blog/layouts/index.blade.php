@extends('blog.layouts.master')

@section('page-header')
  <header class="intro-header parallax-window" data-parallax="scroll"  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>{{ $title }}</h1>
            <hr class="small">
            <h2 class="subheading">{{ $subtitle }}</h2>
            {{--<h2 class="subheading">{{ Inspiring::quote() }}</h2>--}}
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
<br/>
<br/>

  <div class="container">
    <div class="row">
     <div class="rowchapter">
      <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1">

            
         
              <h3 class="post-title">Class10 Maths Solutions </h3>
        
          



                    
          
          <a href="/solutions/real-numbers">
              <h4 class="post-title">Real Numbers</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/polynomials">
              <h4 class="post-title">Polynomials</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/pair-of-linear-equations-in-two-variables">
              <h4 class="post-title">Pair of Linear Equations in two variables</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/quadratic-equations">
              <h4 class="post-title">Quadratic Equations</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/arithematic-progressions">
              <h4 class="post-title">Arithematic Progressions</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/coordinate-geometry">
              <h4 class="post-title">Coordinate Geomtery</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/some-applications-of-triginometry">
              <h4 class="post-title">Some Applications of Triginometry</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/circles">
              <h4 class="post-title">Circles</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/areas-related-to-circles">
              <h4 class="post-title">Areas related to Circles</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/surface-areas-and-volumes">
              <h4 class="post-title">Surface Areas and Volumes</h4>
          </a>

           

              
               
          
                    
          
          <a href="/solutions/probability">
              <h4 class="post-title">Probability</h4>
          </a>

           

              
               
          
          
      </div>
      </div>

    </div>
  </div>
@stop