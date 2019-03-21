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
								<li class="breadcrumb-item" aria-current="page">Data Tables</li>
								<li class="breadcrumb-item active" aria-current="page">View Table</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Table</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<h3>Title</h3>
								<p class="form-control-static">{{$posts->title}}</p>
							</div>
							<div class="form-group">
								<h3>Category</h3>
								<p class="form-control-static">{{$posts->category}}</p>
							</div>
							<div class="form-group">
								<h3>Content</h3>
								<p class="form-control-static">{{$posts->content}}</p>
							</div>
							<div class="form-group">
								<h3>Slug</h3>
								<p class="form-control-static">{{$posts->slug}}</p>
							</div>
							<div class="form-group">
								<h3>Embed</h3>
								<p class="form-control-static">{{$posts->embed}}</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<h3>Publisher</h3>
								<p class="form-control-static">{{$posts->publisher}}</p>
							</div>
							<div class="form-group">
								<h3>Viewed</h3>
								<p class="form-control-static">{{$posts->viewed}}</p>
							</div>
							<div class="form-group">
								<h3>Created_at</h3>
								<p class="form-control-static">{{$posts->created_at}}</p>
							</div>
							<div class="form-group">
								<h3>Update_at</h3>
								<p class="form-control-static">{{$posts->update_at}}</p>
							</div>
							<div class="form-group">
								<h3>Summary Content</h3>
								<p class="form-control-static">{{$posts->cont_sum}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<div class="pull-right">
						<a href="{{action('AdminPostsController@edit', $posts['id'])}}" class="btn btn-rounded btn-success"><i class="fa fa-envelope-o"></i> Edit</a>
						<a href="{{ url('datatable') }}" class="btn btn-rounded btn-danger"><i class="fa fa-times"></i> Back</a>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection