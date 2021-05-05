@extends('layouts.app')

@section('content')

<div class="container">
    <br>

    <h4>All | Post</h4>

    <br>
    {{ $blogs->links() }}
    @foreach($blogs as $blog)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{$blog->title}}</h2>
                <p class="card-text">{{$blog->body}}</p>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between">
                <p class="m-0">Category: {{$blog->category->name}}</p>
                <p class="m-0">Owner: {{$blog->user->name}}</p>
            </div>
        </div>
    @endforeach

</div>


@endsection
