@extends('layouts.dashboard_page')

@section('content')
    <div class="row">
    	<div class="card">
    		<div class="card-body">
        		<form method="post" action="{{ url('brand/edit/'.$brand->id)  }}" class="w-75 border border-dark p-4" enctype="multipart/form-data">
        			@csrf

        			@if(session('msg'))
        	 			<p class="text-success">{{ session('msg') }}</p>
        			@endif

        			<h5>Update Brand</h5>
                	<div class="form-group">
                    	<label for="exampleInputImage">Image</label>
                    	<input type="file" name="brandImage" class="d-bolck w-100 @error('brandImage') is-invalid @enderror" id="exampleInputImage" placeholder="Brand Image">
                    	<span class="text-danger">
                			@error('brandImage')                	
                    			<div class="alert alert-danger my-2">{{ $message }}</div>
                    		@endif	
                    	</span>
                	</div>

                	<div class="form-group">
                    	<label for="exampleInputName">Name</label>
                    	<input type="input" name="brandName" class="form-control @error('brandName') is-invalid @enderror" id="exampleInputName" placeholder="Brand Name" value="{{ $brand->name }}">
                    	<span class="text-danger py-2">
                			@error('brandName')                	
                    			<div class="alert alert-danger my-2">{{ $message }}</div>
                    		@endif
                    	</span>
                	</div>
            		<input type="submit" name="update_brand"  class="btn btn-primary" value="Update">
        		</form>	    			
    		</div>
    	</div>
    </div>
	
@endsection