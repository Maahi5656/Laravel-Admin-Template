@extends('layouts.dashboard_page')

@section('content') 

	
        @if(session('msg'))
        	<p class="text-success">{{ session('msg') }}</p>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
						<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							<thead> 
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Product Image</th>					
									<th scope="col">Product Name</th>
									<th scope="col">Brand</th>
									<th scope="col">Category</th>
									<th scope="col">Quantity</th>
									<th scope="col">Price</th>
									<th scope="col">Description</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($products as $product)
		    					<tr>
									<td scope="row">{{ $product->id }}</td>
									<td style="width: 15%;"><img class="img-thumbnail" src="{{ asset('uploads/product/'.$product->picture) }}" alt=""></td>			
									<td style="width: 15%;">{{ $product->name }}</td>
									<td style="width: 5%;">{{ $product->brand->name }}</td>
									<td style="width: 5%;">{{ $product->category->name }}</td>
									<td style="width: 5%;">{{ $product->quantity }}</td>
									<td style="width: 5%;">{{ $product->price }}</td>
									<td style="width: 15%;">{{ $product->description }}</td>
									<td>
										<a href="{{ url('product/edit/'.$product->id)}}" class="btn btn-primary">Update</a>
										<a href="{{ url('product/delete/'.$product->id)}}" class="btn btn-danger">Delete</a>
									</td>
			    				</tr>
                			@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>			
@endsection