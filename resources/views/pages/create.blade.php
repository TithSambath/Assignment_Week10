@extends('layouts.app')

@section('content')

<div class="container">
    <br>

    <h4>Create | Category</h4>
    
    <br>
    
    <form id="CreateCategoryForm" name="sentMessage" novalidate>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Category Name</label>
                <input class="form-control" id="categoryName" type="text" placeholder="Category Name" required data-validation-required-message="Please enter category name." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" id="sendMessageButton" type="submit">Create</button>
    </form>

    <hr>

    <br>

    <h4>Create | Blog</h4>
    
    <br>
    
    <form id="UpdateProductForm" name="sentMessage" novalidate>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label>Category</label>
            <select class="form-control" name="category_id" required>
                <option>Please select one</option>
                <option value="Food">Drink</option>
                <option value="Drink">Food</option>
            </select>
            </div>
        </div>

        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Title</label>
                <input class="form-control" id="title" type="text" placeholder="Post Title" required data-validation-required-message="Please enter post title." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea">Post</label>
            <textarea class="form-control" id="textArea" rows="6"></textarea>
        </div>
        <br />
        <div id="success"></div>
        <button class="btn btn-primary" id="sendMessageButton" type="submit">Create</button>
    </form>

    <hr>

</div>
@endsection