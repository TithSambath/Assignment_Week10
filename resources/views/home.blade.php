@extends('layouts.app')

@section('content')

<div class="container">
  <br>

  <h4>ALL | Post</h4>
  
  <br>
  @foreach($blogs as $blog)

      <div class="card mb-4">
          <div class="card-body">
              <h2 class="card-title">{{$blog->title}}</h2>
              <p class="card-text">{{$blog->body}}</p>
          </div>
          <div class="card-footer text-muted">
              Category: {{$blog->category->name}}
          </div>
      </div>
      
  @endforeach

  {{ $blogs->links() }}

</div>


@endsection