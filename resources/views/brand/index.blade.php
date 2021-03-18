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
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>         
                                            <tbody>
						                        @foreach($brand as $row)
	    										<tr>
													<td scope="row">{{ $row->id }}</td>
													<td>
														<img src="{{ asset('uploads/brand/'.$row->image) }}" class="img-thumbnail w-25" alt="">
													</td>
													<td><b>{{ $row->name }}</b></td>
													<td>
														<a href="{{ url('/brand/edit/'.$row->id) }}" class="btn btn-primary">Update</a>
														<a href="{{ url('/brand/delete/'.$row->id) }}" class="btn btn-danger">Delete</a>
													</td>
			    								</tr>
	            								@endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
@endsection