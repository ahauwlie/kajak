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
								<li class="breadcrumb-item active" aria-current="page">Edit Table</li>
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
					<div class="form-group">
						<h3>Title</h3>
						<input class="form-control" placeholder="Title:" value="{{$posts->title}}">
					</div>
					<div class="form-group">
						<h3>Category</h3>
						<input class="form-control" placeholder="Category:" value="{{$posts->category}}">
					</div>
					<div class="form-group">
						<h3>Content</h3>
						<textarea id="compose-textarea" class="form-control" style="height: 150px">
							{{$posts->content}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Slug</h3>
						<input class="form-control" placeholder="Slug:" value="{{$posts->slug}}">
					</div>
					<div class="form-group">
						<h3>Embed</h3>
						<input class="form-control" placeholder="Embed:" value="{{$posts->embed}}">
					</div>
					<div class="form-group">
						<h3>Publisher</h3>
						<input class="form-control" placeholder="Publisher:" value="{{$posts->publisher}}">
					</div>
					<div class="form-group">
						<h3>Summary Content</h3>
						<textarea id="compose-textarea1" class="form-control" style="height: 150px">
							{{$posts->cont_sum}}
						</textarea>
					</div>
				</div>
				<div class="box-footer">
					<div class="pull-right">
						<button type="submit" class="btn btn-rounded btn-success"><i class="fa fa-envelope-o"></i> Send</button>
					</div>
					<a href="{{ url('datatable') }}" class="btn btn-rounded btn-danger"><i class="fa fa-times"></i> Discard</a>
				</div>
			</div>
		</section>
	</div>
@endsection