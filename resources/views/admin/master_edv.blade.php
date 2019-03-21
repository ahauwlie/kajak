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

		<link rel="stylesheet" href="<?php echo asset('css/admin/table/bootstrap.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo asset('css/admin/table/datatables.min.css')?>"/>
		<link rel="stylesheet" href="<?php echo asset('css/admin/bootstrap-extend.css')?>">
		<link href="<?php echo asset('css/admin/main-nav.css')?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo asset('css/admin/master_style.css')?>">
		<link rel="stylesheet" href="<?php echo asset('css/admin/table/bootstrap3-wysihtml5.min.css')?>">

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
				@yield('content')
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
		<script src="<?php echo asset('js/admin/jquery-3.3.1.js')?>"></script>
		<script src="<?php echo asset('js/admin/screenfull.js')?>"></script>
		<script src="<?php echo asset('js/admin/popper.min.js')?>"></script>
		<script src="<?php echo asset('js/admin/table/bootstrap.min.js')?>"></script>
		<script src="<?php echo asset('js/admin/jquery.slimscroll.min.js')?>"></script>
		<script src="<?php echo asset('js/admin/fastclick.js')?>"></script>
		<script src="<?php echo asset('js/admin/jquery.smartmenus.js')?>"></script>
		<script src="<?php echo asset('js/admin/menus.js')?>"></script>
		<script src="<?php echo asset('js/admin/template.js')?>"></script>
		<script src="<?php echo asset('js/admin/demo.js')?>"></script>
		<script src="<?php echo asset('js/admin/table/datatables.min.js')?>"></script>
		<script src="<?php echo asset('js/admin/table/data-table.js')?>"></script>
		<script src="<?php echo asset('js/admin/table/bootstrap3-wysihtml5.all.min.js')?>"></script>
		<script src="<?php echo asset('js/admin/table/form-compose.js')?>"></script>

	</body>
</html>
