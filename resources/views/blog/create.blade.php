@extends('layouts.dashboard_page')

@section('content')

<div class="card">
    <div class="card-body">
        <form method="post" action="{{ route('blog.store')  }}" class="w-75 border border-dark p-4" enctype="multipart/form-data">
        	@csrf

        	@if(session('msg'))
        	 <p class="text-success">{{ session('msg') }}</p>
        	@endif

        	<h5>Add New Blog</h5>

            <div class="form-group">
                <label for="exampleInputImage">Blog Image</label>
                <input type="file" name="blogImage" class="d-bolck w-100 @error('productImage') is-invalid @enderror" id="exampleInputImage" placeholder="Blog Image">
                <span class="text-danger">
            		@error('productImage')
                		<div class="alert alert-danger my-2">{{ $message }}</div>
                	@endif
                </span>
            </div>

            <div class="form-group">
                <label for="exampleInputName">Blog Title</label>
                <input type="text" name="blogName" class="form-control @error('productName') is-invalid @enderror" id="exampleInputName" placeholder="Blog Name">
                <span class="text-danger py-2">
            		@error('productName')
                		<div class="alert alert-danger my-2">{{ $message }}</div>
                	@endif
                </span>
            </div>

            <div class="form-group">
                <label for="exampleInputName">Blog Details</label>
                <textarea class="form-control" name="blogDescription" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"></textarea>
                <span class="text-danger py-2">
            		@error('productDescription')
                		<div class="alert alert-danger my-2">{{ $message }}</div>
                	@endif
                </span>
            </div>

            <input type="submit" name="add_blog"  class="btn btn-primary" value="Add New">
        </form>
	</div>
</div>
@endsection