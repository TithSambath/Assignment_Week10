@extends('layouts.app')

@section('content')

<div class="container">
    <br>

    <h4>Create | Blog</h4>

    <br>

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label>Category</label>
            <select class="form-control" name="category_id" required>
                <option value="" disabled selected>Select your category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <!--submit user-id into table-->
                <input class="form-control" name="user_id" type="number" value="{{Auth::id()}}" hidden>


                <label>Title</label>
                <input class="form-control" id="title" name="title" type="text" placeholder="Post Title" required data-validation-required-message="Please enter post title." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea">Post</label>
            <textarea class="form-control" id="textArea" name="body" rows="6"></textarea>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>

    <hr>

</div>
@endsection
