@extends('layouts.dashboard_page')

@section('content') 
	@if(session('msg'))
	    <p class="text-success">{{ session('msg') }}</p>
	@endif
	    <div class="card">
			<div class="table-responsive">			
				<table class="table table-bordered border-success mb-0">
					<thead class="table-dark">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Image</th> 
							<th scope="col">Name</th>
							<th scope="col">Action</th>
						</tr>		
					</thead>
					<tbody id="jsonData">
                		
					</tbody>		
				</table>
			</div>			
	    </div>
		
@endsection

@section('script')

<script>
	
	$(document).ready(function() {

			$.ajax({
				url: "/category/json",
				method: "GET",
				dataType: "json",
				success: function(data) {
					let trData = ``;
					let i = 1;
					data.forEach(e => {
						trData = trData + `<tr>
							<td>${i}</td>
							<td><img src="/uploads/category/${e.image}" alt=""></td>
							<td>${e.name}</td>
							<td>
				    			<a href="/category/edit/${e.id}" class="btn btn-primary">Update</a>
				    			<a href="/category/delete/${e.id}" class="btn btn-danger">Delete</a>
				    		</td>
						</tr>`;
						i = i+1;

					})
					$("#jsonData").html(trData);
				}
			})


	})


</script>

@endsection