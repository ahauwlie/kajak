@extends('admin.master_edv')

@section('content')
	<div class="container-full">
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Data Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('admin') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Hover Export Data Table</h3>
							<h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
							<a href="{{ route('datatable.create') }}" class="btn btn-info btn-sm right">New News</a>
    
							    @if ($message = Session::get('message'))
							        <div class="alert alert-success martop-sm">
							            <p>{{ $message }}</p>
							        </div>
							    @endif
						</div>
						<!-- <div class="box-header with-border">
							
						</div> -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>Action</th>
											<th>ID</th>
											<th>Title</th>
											<th>Category</th>
											<th>Content</th>
											<th>Slug</th>
											<th>Embed</th>
											<th>Publisher</th>
											<th>Viewed</th>
											<th>Created_at</th>
											<th>Updated_at</th>
											<th>Summary</th>
										</tr>
									</thead>
									@foreach($posts as $row)
									<tbody>
										<tr>
											<td class='text-center'>
												<a href="#"><i class='fa fa-eye'></i></a>
												<a href="{{action('AdminPostsController@edit', $row['id'])}}"><i class='fa fa-pencil'></i></a>
												<a href="#"><i class='fa fa-trash'></i></a>
											</td>
											<td>{{$row['id']}}</td>
											<td>{{$row['title']}}</td>
											<td>{{$row['category']}}</td>
											<td>{{$row['content']}}</td>
											<td>{{$row['slug']}}</td>
											<td>{{$row['embed']}}</td>
											<td>{{$row['publisher']}}</td>
											<td>{{$row['viewed']}}</td>
											<td>{{$row['created_at']}}</td>
											<td>{{$row['updated_at']}}</td>
											<td>{{$row['cont_sum']}}</td>
										</tr>
									</tbody>
									@endforeach				  
									<tfoot>
										<tr>
											<th>Action</th>
											<th>ID</th>
											<th>Title</th>
											<th>Category</th>
											<th>Content</th>
											<th>Slug</th>
											<th>Embed</th>
											<th>Publisher</th>
											<th>Viewed</th>
											<th>Created_at</th>
											<th>Updated_at</th>
											<th>Summary</th>
										</tr>
									</tfoot>
								</table>
							</div>              
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection