@extends('layouts.app')

@section('content')

<div class="container">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="pl-0"><a href="{{ route('blogs.create') }}">Create</a></li>
        </ul>
    </nav><!-- .nav-menu -->
    <br>

    <h4>Your | Post</h4>

    <br>
    {{ $blogs->links() }}
    @foreach($blogs as $blog)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{$blog->title}}</h2>
                <p class="card-text">{{$blog->body}}</p>
                @can('update',$blog)
                    <a class="btn btn-primary btn-sm" href={{route('blogs.edit',$blog)}}>Edit</a>
                @endcan
                @can('delete',$blog)
                    <a class="btn btn-danger btn-sm" onclick="document.getElementById({{$loop->index + 1}}).submit()">Remove</a>
                    <form id="{{$loop->index + 1}}" action="{{route('blogs.destroy',$blog)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                @endcan
            </div>
            <div class="card-footer text-muted d-flex justify-content-between">
                <p class="m-0">Category: {{$blog->category->name}}</p>
                <p class="m-0">Owner: {{$blog->user->name}}</p>
            </div>
        </div>
    @endforeach

</div>


@endsection
