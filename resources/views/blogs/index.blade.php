@extends('layouts/layout')

@section('content')      

      

        <div class="col-sm-8 blog-main">

        @foreach($posts as $post)

          @include('blogs/post')

          @endforeach

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

       




 @endsection