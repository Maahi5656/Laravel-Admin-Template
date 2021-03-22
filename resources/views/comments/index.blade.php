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
									<th scope="col">Comment ID</th>
									<th scope="col">Commentator's Name</th>					
									<th scope="col">Commenator's Email</th>
									<th scope="col">Details</th>
									<th scope="col">Blog</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>

							@foreach($comments as $comment)
		    					<tr>
									<td scope="row">{{ $comment->id }}</td>			
									<td style="width: 15%;">{{ $comment->name }}</td>
									<td style="width: 5%;">{{ $comment->email }}</td>
									<td style="width: 5%;">{{ $comment->details }}</td>
									<td style="width: 5%;">{{ $comment->blog->title }}</td>
									<td>
										<a href="" class="btn btn-danger">Delete</a>
									</td>
			    				</tr>
                			@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>			

@endsection