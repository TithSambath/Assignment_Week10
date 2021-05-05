@extends('layouts.app')

@section('content')

<div class="container">
    @can('crud-categories')
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="pl-0"><a href="{{ route('categories.create') }}">Create</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    @endcan
    <br>

    <h4>Your | Categories</h4>

    <br>

    <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            @can('crud-categories')
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            @endcan
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$category->name}}</td>
                    @can('crud-categories')
                        <td><a href="{{route('categories.edit',$category)}}" class="btn btn-primary btn-sm">Edit</a></td>
                        <td><a onclick="document.getElementById({{$loop->index + 1}}).submit()" class="btn btn-primary btn-sm">Remove</a></td>
                    @endcan
                </tr>
                <form id="{{$loop->index + 1}}" action="{{route('categories.destroy',$category)}}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>

            @endforeach
        </tbody>
    </table>

    <br>
</div>


@endsection
