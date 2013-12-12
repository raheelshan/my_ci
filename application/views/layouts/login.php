<html lang="en-us">

<head>
	<title>Time Sheet Appliction</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta charset="UTF-8">
	
	<link rel="apple-touch-con" href="" />
	<!-- The Columnal Grid and mobile stylesheet -->
	<link rel="stylesheet" href="<?php echo CSS;?>columnal/columnal.css" type="text/css" media="screen" />
	<!-- Fixes for IE -->
	<!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php echo CSS;?>columnal/ie.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo CSS;?>ie8.css" type="text/css" media="screen" />
	<![endif]-->        
	<!-- Now that all the grids are loaded, we can move on to the actual styles. --> 
	<link rel="stylesheet" href="<?php echo CSS;?>style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS;?>global.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS;?>config.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS;?>login.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS;?>clock.css" type="text/css" media="screen" />
	
	<script src="<?php echo JS;?>jquery.js"></script>
	<script type = 'text/javascript' src="<?php echo JS;?>js/login.js"></script>	
	<script type = 'text/javascript' src="<?php echo JS;?>js/clock.js"></script>	
	<script type = 'text/javascript'>var SITE_URL = "<?php echo SITE_URL;?>";</script>	
</head>
<body>

<div id="wrap">
	<div id="main">
		<header class="header">
			<div class="row clearfix">
				<div class="left">
					<a href="#" class="user">Time Sheet Appliction</a>
				</div>

				
				<div class="right">
					<ul id="toolbar">
						<li><span>Logged in as</span> <a class="user" href="#">Administrator</a> <a id="loginarrow" href="#"></a></li>
						<li><a id="messages" href="#">Messages</a></li>
						<li><a id="settings" href="#">Settings</a></li>
						<li><a id="search" href="#">Search</a></li>
					</ul>

					<div id="logindrop">
						<ul>
							<li id="editprofile"><a href="#">Edit Profile</a></li>
							<li id="logoutprofile"><a href="#">Logout</a></li>
						</ul>
					</div>
					<div id="searchdrop">
						<input type="text" id="searchbox" placeholder="Search...">
					</div>
					
				</div>  
			</div>
		</header>
		
		<nav class="container">
			<select class="mobile-only row clearfix" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
				<option value="index.php?t=dashboard">Login</option>
			</select>

			<ul class="sf-menu mobile-hide row clearfix">
				<li class="active iconed">
					<a href="./index_db98c802.php.html"><span><img src="<?php echo IMG;?>header/icon_dashboard.png" /> Login</span></a>
				</li>
			</ul>
		</nav>
		<!--	Here the contents aro seperated	-->
		<?php echo $yield; ?>		
		<!--	Here the contents aro seperated	-->
    </div>
</div>

<footer class = "header">
    <div class="container">
		<div class="row clearfix">
			<div class="col_12">
				<span class="left">&copy; 2011 Themio.</span>
				<span class="right">Powered by Muse</span>
			</div>
		</div>
    </div>
</footer>

</body>
</html>
