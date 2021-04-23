@extends('layouts.app')

@section('content')

<div class="container">

    <br>

    <h4>Update | Category</h4>
    
    <br>
    
    <form action="{{ route('categories.update',$category) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
              <label>Category ID</label>
              <input class="form-control" id="categoryID" name="id" type="text" value="{{$category->id}}" placeholder="Category ID" required data-validation-required-message="Please enter category ID." />
              <p class="help-block text-danger"></p>
          </div>
        </div>

        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Category Name</label>
                <input class="form-control" id="categoryName" value="{{$category->name}}" name="name" type="text" placeholder="Category Name" required data-validation-required-message="Please enter category name." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>

</div>
@endsection