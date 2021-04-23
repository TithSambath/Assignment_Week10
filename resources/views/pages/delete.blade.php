@extends('layouts.app')

@section('content')

<div class="container">

    <br>

    <h4>Delete | Category</h4>
    
    <br>
    
    <form id="deleteCategoryForm" name="sentMessage" novalidate>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Category Name</label>
                <input class="form-control" id="categoryName" type="text" placeholder="Category Name" required data-validation-required-message="Please enter category name." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" id="sendMessageButton" type="submit">Delete</button>
    </form>

    <hr>

    <br>

    <h4>Delete | Blog</h4>
    
    <br>
    
    <form id="deleteBlogForm" name="sentMessage" novalidate>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Blog ID</label>
                <input class="form-control" id="blogID" type="text" placeholder="Blog ID" required data-validation-required-message="Please enter Blog ID." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" id="sendMessageButton" type="submit">Request</button>
    </form>

</div>
@endsection