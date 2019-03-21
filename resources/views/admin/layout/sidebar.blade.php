<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div> 
<ul class="nav nav-tabs control-sidebar-tabs">
	<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Chat</a></li>
	<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane" id="control-sidebar-home-tab">
		<div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		</div>
		
		<div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		</div>
		<div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
				<a class="avatar avatar-lg status-success" href="#">
					<img src="images/admin/1.jpg" alt="...">
				</a>
				<div class="media-body">
					<p class="font-size-16">
						<a class="hover-primary" href="#"><strong>Tyler</strong></a>
					</p>
					<p>Praesent tristique diam...</p>
					<span>Just now</span>
				</div>
			</div>

			<div class="media py-10 px-0">
				<a class="avatar avatar-lg status-danger" href="#">
					<img src="images/admin/2.jpg" alt="...">
				</a>
				<div class="media-body">
					<p class="font-size-16">
						<a class="hover-primary" href="#"><strong>Luke</strong></a>
					</p>
					<p>Cras tempor diam ...</p>
					<span>33 min ago</span>
				</div>
			</div>			  
		</div>
	</div>
	<div class="tab-pane" id="control-sidebar-settings-tab">
		<div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		</div>
		<ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
				<input type="checkbox" id="basic_checkbox_1" class="filled-in">
				<label for="basic_checkbox_1" class="mb-0 h-15"></label>
				<span class="text-line">Nulla vitae purus</span>
				<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
				<div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				</div>
			</li>
			<li class="py-15 px-5">
				<input type="checkbox" id="basic_checkbox_2" class="filled-in">
				<label for="basic_checkbox_2" class="mb-0 h-15"></label>
				<span class="text-line">Phasellus interdum</span>
				<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
				<div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				</div>
			</li>
		</ul>
	</div>
</div>