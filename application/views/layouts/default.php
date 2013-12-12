<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uniform.default.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.datepicker.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.cleditor.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.plupload.queue.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.ui.plupload.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
<div class="style-toggler">
	<img src="<?php echo base_url();?>assets/img/icons/fugue/color.png" alt="" class='tip' title="Toggle style-switcher" data-placement="right">
</div>					
<div class="style-switcher">
	<h3>Style-switcher</h3>
	<ul>
		<li>
			<a href="#" class='style'>Default</a>
		</li>
		<li>
			<a href="#" class='blue'>Blue</a>
		</li>
		<li>
			<a href="#" class='green'>Green</a>
		</li>
		<li>
			<a href="#" class='red'>Red</a>
		</li>
	</ul>
</div>
<div class="topbar clearfix">
	<div class="container-fluid">
		<a href="dashboard.html" class='company'>Neat Admin Template</a>
		<form action="#">
			<input type="text" value="Search here...">
		</form>
		<ul class='mini'>
			<li class='dropdown dropdown-noclose supportContainer'>
				<a href="#" class='dropdown-toggle' data-toggle="dropdown">
					<img src="<?php echo base_url();?>assets/img/icons/fugue/book-question.png" alt="">
					Support tickets
					<span class="label label-warning">5</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							What is the question?
							<span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom'>
						<div class="title">
							How can i do this and that?
							<span>Jul 19, 2012 by <a href="#" class='pover' data-title="Username" data-content="User information comes here">Username</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom'>
						<div class="title">
							I want more support tickets!
							<span>Jul 19, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom custom-hidden'>
						<div class="title">
							This is a great feature, BUT...
							<span>Jul 18, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Ipsum</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom custom-hidden'>
						<div class="title">
							I want more colors! How?
							<span>Jul 16, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="<?php echo base_url();?>assets/img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class="custom">
						<div class="expand_custom">
							<a href="#">Show all support tickets</a>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown pendingContainer'>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<img src="<?php echo base_url();?>assets/img/icons/fugue/document-task.png" alt="">
					Pending orders
					<span class="label label-important">1</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							Pending order #1 
							<span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show order"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete order"><img src="<?php echo base_url();?>assets/img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown messageContainer'>
				<a href="#" class='dropdown-toggle' data-toggle='dropdown'>
					<img src="<?php echo base_url();?>assets/img/icons/fugue/balloons-white.png" alt="">
					Messages
					<span class="label label-info">3</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							Hello, whats your name?
							<span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show message"><img src="<?php echo base_url();?>assets/img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Reply message"><img src="<?php echo base_url();?>assets/img/icons/fugue/mail-reply.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo base_url();?>assets/img/icons/fugue/gear.png" alt="">
					Settings
				</a>
			</li>
			<li>
				<a href="index.html">
					<img src="<?php echo base_url();?>assets/img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="dashboard.html"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<a href="dashboard.html">
					Dashboard
				</a>
			</li>
		</ul>

	</div>
</div>
<div class="main">
	<div class="navi">
		<ul class='main-nav'>
			<li>
				<a href="dashboard.html" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
					<span class="label label-warning">10</span>
				</a>
			</li>
			<li>
				<a href="forms.html" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Forms
					<span class="label label-info">1</span>
				</a>
			</li>
			<li class='active open'>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-th-large icon-white"></i></div>
					Tables
					<img src="<?php echo base_url();?>assets/img/toggle-subnav-up-white.png" alt="">
				</a>
				<ul class='collapsed-nav'>
					<li class='active'>
						<a href="datatables.html">
							Data Tables
						</a>
					</li>
					<li>
						<a href="plaintables.html">
							Plain Tables
						</a>
					</li>
					<li>
						<a href="mediatables.html">
							Media Tables
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-tasks icon-white"></i></div>
					Interface Elements
					<img src="<?php echo base_url();?>assets/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="buttons.html">
							Buttons & Icons
						</a>
					</li>
					<li>
						<a href="sliders.html">
							Sliders & Progress-Bars
						</a>
					</li>
					<li>
						<a href="tooltips.html">
							Tooltips, Alerts & Notification
						</a>
					</li>
					<li>
						<a href="tabs.html">
							Tabs, Pills & Accordion
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="statistics.html" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Statistics
					<span class="label label-important">3</span>
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-exclamation-sign icon-white"></i></div>
					Error Pages
					<img src="<?php echo base_url();?>assets/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="403.html">
							403
						</a>
					</li>
					<li>
						<a href="404.html">
							404
						</a>
					</li>
					<li>
						<a href="500.html">
							500
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Sample Pages
					<img src="<?php echo base_url();?>assets/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="gallery.html">
							Gallery
						</a>
					</li>
					<li>
						<a href="messages.html">
							Messages
						</a>
					</li>
					<li>
						<a href="userprofile.html">
							User Profile
						</a>
					</li>
					<li>
						<a href="index.html">
							Login
						</a>
					</li>
					<li>
						<a href="results.html">
							Search results
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="container-fluid">
		<div class="content">
			<?php echo $yield; ?>		
		</div>	
	</div>
</div>	
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/less.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uniform.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.timepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url();?>assets/js/plupload/plupload.full.js"></script>
<script src="<?php echo base_url();?>assets/js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.cleditor.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.inputmask.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.textareaCounter.plugin.js"></script>
<script src="<?php echo base_url();?>assets/js/ui.spinner.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>
</html>