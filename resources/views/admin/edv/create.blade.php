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
								<li class="breadcrumb-item active" aria-current="page">Create New Data</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Create New Data</h3>
				</div>
				<div class="box-body">
					<form method="post" action="{{url('datatable')}}">
						{{csrf_field()}}
						<div class="form-group">
							<h3>Title</h3>
							<input type="text" name="title" class="form-control"/>
						</div>
						<div class="form-group">
							<h3>Category</h3>
							<input type="text" name="category" class="form-control"/>
						</div>
						<div class="form-group">
							<h3>Content</h3>
							<textarea id="compose-textarea" name="content" class="form-control" style="height: 150px">
							</textarea>
						</div>
						<div class="form-group">
							<h3>Slug</h3>
							<input type="text" name="slug" class="form-control"/>
						</div>
						<div class="form-group">
							<h3>Embed</h3>
							<input type="text" name="embed" class="form-control"/>
						</div>
						<div class="form-group">
							<h3>Publisher</h3>
							<input type="text" name="publisher" class="form-control"/>
						</div>
						<div class="form-group">
							<h3>Summary Content</h3>
							<textarea id="compose-textarea1" name="cont_sum" class="form-control" style="height: 150px">
							</textarea>
						</div>
						<!-- <div class="box-footer">
							<div class="pull-right">
								<button type="submit" class="btn btn-rounded btn-success"><i class="fa fa-envelope-o"></i> Submit</button>
							</div>
							<a href="{{ url('datatable') }}" class="btn btn-rounded btn-danger"><i class="fa fa-times"></i> Discard</a>
						</div> -->
						<div class="form-group">
							<input type="submit" class="btn btn-rounded btn-success" />
						</div>
					</form>
				</div>
				
			</div>
		</section>
	</div>
@endsection