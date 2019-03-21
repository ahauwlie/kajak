<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://crmx-admin-template.multipurposethemes.com/images/admin/favicon.ico">

		<title>CrmX Admin - Dashboard</title>

		<link rel="stylesheet" href="css/admin/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/admin/c3.min.css">
		<link rel="stylesheet" href="css/admin/daterangepicker.css">	
		<link rel="stylesheet" href="css/admin/fullcalendar.min.css">
		<link rel="stylesheet" href="css/admin/fullcalendar.print.min.css" media="print">
		<link rel="stylesheet" href="css/admin/switch.css">
		<link rel="stylesheet" href="css/admin/morris.css">
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
							<div class="mr-auto w-p50">
								<h3 class="page-title">Admin Panel</h3>
								<div class="d-inline-block align-items-center">
									<nav>
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
											<li class="breadcrumb-item active" aria-current="page">Control</li>
										</ol>
									</nav>
								</div>
							</div>
							<div class="right-title w-170">
								<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
									<span class="subheader_daterange-label">
										<span class="subheader_daterange-title"></span>
										<span class="subheader_daterange-date text-primary"></span>
									</span>
									<a href="#" class="btn btn-rounded btn-sm btn-primary">
										<i class="fa fa-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>

					<section class="content">
						<div class="row">
							<div class="col-xl-2 col-12">
								<div class="box">
									<div class="box-body">
										<div class="text-center">
											<h1 class="font-size-50 text-primary"><i class="mdi mdi-wheelchair-accessibility"></i></h1>
											<div class="bh-line"><span class="badge badge-pill badge-xl badge-secondary px-15">Patient</span></div>								
											<h2>4,569</h2>	
										</div>					
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-12">
								<div class="box">
									<div class="box-body">
										<div class="text-center">
											<h1 class="font-size-50 text-warning"><i class="mdi mdi-file-document"></i></h1>
											<div class="bh-line"><span class="badge badge-pill badge-xl badge-secondary px-15">Encounters</span></div>								
											<h2>23,009</h2>
										</div>					
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-12">
								<div class="box">
									<div class="box-body">
										<div class="text-center">
											<h1 class="font-size-50 text-info"><i class="mdi mdi-calendar-multiple"></i></h1>
											<div class="bh-line"><span class="badge badge-pill badge-xl badge-secondary px-15">Appointments</span></div>								
											<h2>56</h2>
										</div>					
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-12">
								<div class="box">
									<div class="box-body">
										<div class="text-center">
											<h1 class="font-size-50 text-success"><i class="mdi mdi-heart-pulse"></i></h1>
											<div class="bh-line"><span class="badge badge-pill badge-xl badge-secondary px-15">Lab & Radiology</span></div>								
											<h2>12,100</h2>
										</div>					
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-12">
								<div class="box">
									<div class="box-body">
										<div class="text-center">
											<h1 class="font-size-50 text-danger"><i class="mdi mdi-file-document-box"></i></h1>
											<div class="bh-line"><span class="badge badge-pill badge-xl badge-secondary px-15">Prescription</span></div>								
											<h2>14,023</h2>
										</div>					
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-12">
								<div class="box">
									<div class="box-body">
										<div class="text-center">
											<h1 class="font-size-50 text-dark"><i class="mdi mdi-redo-variant"></i></h1>
											<div class="bh-line"><span class="badge badge-pill badge-xl badge-secondary px-15">Referral</span></div>								
											<h2>4,567</h2>
										</div>					
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-12">
								<div class="box">
									<div class="box-header with-border">
										<h4 class="box-title">Hospital Earning</h4>
										<ul class="box-controls pull-right">
											<li><a class="box-btn-close" href="#"></a></li>
											<li><a class="box-btn-slide" href="#"></a></li>	
											<li><a class="box-btn-fullscreen" href="#"></a></li>
										</ul>
									</div>
									<div class="box-body text-center">
										<canvas id="earning" class="h-400"></canvas>
									</div>
								</div>		
							</div>

							<div class="col-xl-6 col-12">
								<div class="box">
									<div class="box-header with-border">
										<h4 class="box-title">Patients Overview</h4>
										<ul class="box-controls pull-right">
											<li><a class="box-btn-close" href="#"></a></li>
											<li><a class="box-btn-slide" href="#"></a></li>	
											<li><a class="box-btn-fullscreen" href="#"></a></li>
										</ul>
									</div>
									<div class="box-body text-center">
										<div id="patients-overview" class="h-400"></div>
									</div>
								</div>	
							</div>			

							<div class="col-xl-4 col-12"> 			
								<div class="box">
									<div class="box-header">
										<h4 class="box-title">Current Vitals</h4>
										<div class="box-controls pull-right">
											<div class="lookup lookup-circle lookup-right">
												<input type="text" name="s" placeholder="Patients id">
											</div>
										</div>
									</div>
									<div class="box-body">
										<div class="flexbox bb-1 mb-15">
											<div><p><span class="text-light">Patient Name:</span> <strong>Jonsahn</strong></p></div>
											<div><p><span class="text-light">Patient Id:</span> <strong>1254896</strong></p></div>
										</div>	
										<div class="row">						
											<div class="col-12">
												<div class="row bb-1 pb-10">							
													<div class="col-4">							  
														<img class="img-fluid float-left w-30 mt-10 mr-10" src="images/admin/weight.png" alt="">
														<div>
															<p class="mb-0"><small>Weight</small></p> 
															<h5 class="mb-0"><strong>230 ibs</strong></h5>
														</div>
													</div>							
													<div class="col-4 bl-1 br-1">							  
														<img class="img-fluid float-left w-30 mt-10 mr-10" src="images/admin/human.png" alt="">
														<div>
															<p class="mb-0"><small>Height</small></p> 
															<h5 class=" mb-0"><strong>6’1</strong></h5>
														</div>
													</div>							
													<div class="col-4">							  
														<img class="img-fluid float-left w-30 mt-10 mr-10" src="images/admin/bmi.png" alt="">
														<div>
															<p class="mb-0"><small>BMI</small></p> 
															<h5 class="mb-0"><strong>30.34</strong></h5>
														</div>
													</div>
												</div>
												<div class="row pt-5">
													<div class="col-12">
														<span class="text-danger">Blood Pressure</span>
													</div>
													<div class="col-6">
														<div class="progress progress-xs mb-0 mt-5 w-40">
															<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
															</div>
														</div>
														<h2 class="float-left mt-0 mr-10"><strong>150</strong></h2>
														<div>
															<p class="mb-0"><small>Systolic</small></p> 
															<p class="mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>
														</div>
													</div>							
													<div class="col-6 bl-1">	
														<div class="progress progress-xs mb-0 mt-5 w-40">
															<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
															</div>
														</div>						  
														<h2 class="float-left mt-0 mr-10"><strong>90</strong></h2>
														<div>
															<p class="mb-0"><small>Diastolic</small></p> 
															<p class="mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="box-body pt-0">
										<p><small>Recorded on 25/05/2018</small></p>
									</div>
									<div class="box-body bg-danger">
										<img src="images/admin/smoking.png" alt="" class="float-left mr-10">
										<p>Smoking Status : current every day smoker</p>
									</div>
								</div>			
							</div>

							<div class="col-xl-4 col-12">
								<div class="box">
									<div class="box-body">
										<h4 class="box-title">New Patient List</h4>
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>L. Name</th>
														<th>ID</th>
														<th>Diseases</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Jacob</td>
														<td>Doe</td>
														<td>@Jacob</td>
														<td><span class="badge badge-danger">Fever</span> </td>
													</tr>
													<tr>
														<td>2</td>
														<td>Mason</td>
														<td>Clark</td>
														<td>@Mason</td>
														<td><span class="badge badge-info">Cancer</span> </td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-12">
								<div class="box">
									<div class="box-header with-border">
										<h4 class="box-title">Doctor list</h4>
										<div class="box-controls pull-right">
											<div class="lookup lookup-circle lookup-right">
												<input type="text" name="s">
											</div>
										</div>
									</div>
									<div class="box-body p-0">
										<div class="media-list media-list-hover media-list-divided inner-user-div">
											<div class="media media-single">
												<a href="#">
													<img class="avatar avatar-lg" src="images/admin/2.jpg" alt="...">
												</a>

												<div class="media-body">
													<h4><a href="#">Dr. Austin</a></h4>
													<p class="text-fade">Skin Specialist</p>
												</div>

												<div class="media-right">
													<a class="btn btn-block btn-success btn-sm" href="#">Available</a>
												</div>
											</div>

											<div class="media media-single">
												<a href="#">
													<img class="avatar avatar-lg" src="images/admin/1.jpg" alt="...">
												</a>

												<div class="media-body">
													<h4><a href="#">Dr. Thomas</a></h4>
													<p class="text-fade">Pediatric</p>
												</div>

												<div class="media-right">
													<a class="btn btn-block btn-warning btn-sm" href="#">5:00 pm to 7:00 pm</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-12">
								<div class="box">
									<div class="box-body">
										<h4 class="box-title">Radiology List</h4>
										<div class="table-responsive">
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th class="bb-2">No.</th>
														<th class="bb-2">Test</th>
														<th class="bb-2">Lab</th>
														<th class="bb-2">Priority</th>
														<th class="bb-2">Cost</th>
														<th class="bb-2">Handling</th>
														<th class="bb-2">Coll. By</th>
														<th class="bb-2">Status</th>
														<th class="bb-2">Result</th>
														<th class="bb-2">Signed</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Blood Count</td>
														<td>Microbiology</td>
														<td><span class="badge badge-warning">Law</span></td>
														<td>N500</td>
														<td>Johen Doe</td>
														<td>5.45pm 11/05</td>
														<td><span class="badge badge-success">Result Added</span></td>
														<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result  </a>
															<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment  </a>
														</td>
														<td>
															<button type="button" class="btn btn-sm btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
																<div class="handle"></div>
															</button>
														</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Blood Count</td>
														<td>Microbiology</td>
														<td><span class="badge badge-danger">High</span></td>
														<td>N500</td>
														<td>Johen Doe</td>
														<td>5.45pm 11/05</td>
														<td><span class="badge badge-success">Result Added</span></td>
														<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result  </a>
															<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment  </a>
														</td>
														<td>
															<button type="button" class="btn btn-sm btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
																<div class="handle"></div>
															</button>
														</td>
													</tr>						
												</tbody>
											</table>
										</div>				
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>


			<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="result-popup" aria-hidden="true" style="display: none;" id="result">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="result-popup">Radiology Investigations - Result</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<div class="row justify-content-between">
								<div class="col-md-7 col-12">
									<h4>Test Name - Neck Scan</h4>
								</div>
								<div class="col-md-5 col-12">
									<h4 class="text-right">Lab Order Id : L0000002821</h4>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="bg-secondary">
										<tr>
											<th scope="col">Test</th>
											<th scope="col">Result</th>
											<th scope="col">Range</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Swelling Diameter</td>
											<td>45 - 1000</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="comment">
								<p><span class="font-weight-600">Comment</span> : <span class="comment-here text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></p>
							</div>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th colspan="2" class="b-0">Test By</th>
											<th colspan="2" class="b-0">Signed By</th>
										</tr>
										<tr class="bg-secondary">
											<td>Donald jr</td>
											<td>Time : 11-8-2017   04:22</td>
											<td>Lous Clark</td>
											<td>Time : 11-8-2017   04:22</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-info pull-right">Print</button>
							<button type="button" class="btn btn-success pull-right">Save</button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="comment-popup" aria-hidden="true" style="display: none;" id="comment-dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="comment-popup">Radiology Investigations - Comment</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<div class="row justify-content-between">
								<div class="col-12">
									<h4>Comment</h4>
								</div>
							</div>
							<form>
								<div class="form-group">
									<textarea class="form-control" id="comment-area" rows="3"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-success pull-right mr-10">Save</button>
						</div>
					</div>
				</div>
			</div>



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
		<script src="js/admin/bootstrap.js"></script>	
		<script src="js/admin/jquery.slimscroll.js"></script>
		<script src="js/admin/moment.min.js"></script>
		<script src="js/admin/daterangepicker.js"></script>
		<script src="js/admin/fastclick.js"></script>
		<script src="js/admin/Chart.bundle.js"></script>
		<script src="js/admin/utils.js"></script>
		<script src="js/admin/data.js"></script>
		<script src="js/admin/apexcharts.js"></script>
		<script src="js/admin/jquery.smartmenus.js"></script>
		<script src="js/admin/menus.js"></script>
		<script src="js/admin/template.js"></script>
		<script src="js/admin/dashboard4.js"></script>
		<script src="js/admin/demo.js"></script>	
	</body>
</html>
