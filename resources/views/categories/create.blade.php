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

    <h4>Create | Category</h4>
    
    <br>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Category Name</label>
                <input class="form-control" id="categoryName" name="name" type="text" placeholder="Category Name" required data-validation-required-message="Please enter category name." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>

    <hr>

    <br>

</div>
@endsection