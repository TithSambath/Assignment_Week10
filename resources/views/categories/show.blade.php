@extends('layouts.app')

@section('content')

<div class="container">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="pl-0"><a href="{{ route('categories.create') }}">Create</a></li>
            <li><a href="{{ url('#') }}">Update</a></li>              
        </ul>
    </nav><!-- .nav-menu -->

    <br>

    <h4>Your | Categories</h4>
    
    <br>
    
    <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$category->name}}</td>
                </tr>

            @endforeach
        </tbody>
    </table>

    <br>
</div>


@endsection