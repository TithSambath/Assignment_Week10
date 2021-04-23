@extends('layouts.app')

@section('content')

<div class="container">

    <br>

    <h4>Update | Blog</h4>
    
    <br>
    
    <form action="{{route('blogs.update',$blog)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Blog ID</label>
                <input class="form-control" id="blogID" value="{{$blog->id}}" disabled type="text" placeholder="Blog Title" required data-validation-required-message="Please enter blog id." />
                <p class="help-block text-danger"></p>

                <label>Category</label>
                <select class="form-control" name="category_id" required>
                    <option>Please select one</option>
                    @foreach($categories as $category)
                        @if(strcmp($category->name,$blog->category->name) != 0)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @else
                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                        @endif
                    @endforeach  
                </select>
            </div>
            <div class="form-group floating-label-form-group controls">
                <label>Title</label>
                <input class="form-control" id="title" name="title" value="{{$blog->title}}" type="text" placeholder="Post Title" required data-validation-required-message="Please enter post title." />
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <label for="textArea">Post</label>
                <textarea class="form-control" name="body" id="textArea" rows="6">{{$blog->body}}</textarea>
            </div>
        </div>

        <br />
        <div id="success"></div>
        <button class="btn btn-primary" id="sendMessageButton" type="submit">Update</button>
    </form>

</div>
@endsection