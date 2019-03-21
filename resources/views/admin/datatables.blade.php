<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://crmx-admin-template.multipurposethemes.com/images/favicon.ico">

		<title>CrmX Admin - Dashboard  Data Tables</title>

		<link rel="stylesheet" href="css/admin/table/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/admin/table/datatables.min.css"/>
		<link rel="stylesheet" href="css/admin/bootstrap-extend.css">
		<link href="css/admin/main-nav.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/admin/master_style.css">

	</head>

	<body class="layout-top-nav light-skin theme-fruit">
		<div class="wrapper">

			<div class="art-bg">
				<img src="http://crmx-admin-template.multipurposethemes.com/images/art1.svg" alt="" class="art-img light-img">
				<img src="http://crmx-admin-template.multipurposethemes.com/images/art2.svg" alt="" class="art-img dark-img">
			</div>

			<header class="main-header">
				@include('admin.layout.header')
			</header>

			<nav class="main-nav" role="navigation">
				@include('admin.layout.layout_page')
			</nav>

			<div class="content-wrapper">
				<div class="container-full">
					<div class="content-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="page-title">Data Tables</h3>
								<div class="d-inline-block align-items-center">
									<nav>
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
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
									</div>
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
											                	<a href="#"><i class='fa fa-pencil'></i></a>
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
			</div>
			<div class="control-sidebar-bg"></div>
			<footer class="main-footer">
				@include('admin.layout.footer')
			</footer>

			<aside class="control-sidebar control-sidebar-light">
				@include('admin.layout.sidebar')
			</aside>
			<div class="control-sidebar-bg"></div>
		</div>
		<script src="js/admin/jquery-3.3.1.js"></script>
		<script src="js/admin/screenfull.js"></script>
		<script src="js/admin/popper.min.js"></script>
		<script src="js/admin/table/bootstrap.min.js"></script>
		<script src="js/admin/jquery.slimscroll.min.js"></script>
		<script src="js/admin/fastclick.js"></script>
		<script src="js/admin/jquery.smartmenus.js"></script>
		<script src="js/admin/menus.js"></script>
		<script src="js/admin/template.js"></script>
		<script src="js/admin/demo.js"></script>
		<script src="js/admin/table/datatables.min.js"></script>
		<script src="js/admin/table/data-table.js"></script>
		

	</body>
</html>
