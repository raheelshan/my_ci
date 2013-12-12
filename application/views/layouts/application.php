<html lang="en-us">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	

        <link rel="apple-touch-con" href="" />

	<title>Muse Admin Panel</title>

        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	<!-- The Columnal Grid and mobile stylesheet -->
		<link rel="stylesheet" href="<?php echo CSS;?>columnal/columnal.css" type="text/css" media="screen" />

	<!-- Fixes for IE -->
        <script type="text/javascript" src= "<?php echo JS .'jquery.js'?>"></script>
		<script type="text/javascript" src= "<?php echo JS .'js/login.js'?>"></script>
		<script type="text/javascript" src= "<?php echo JS .'core.js'?>"></script>
		<script type = 'text/javascript'>
		var SITE_URL = "<?php echo SITE_URL;?>";
		</script>
	<!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php echo CSS;?>columnal/ie.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo CSS;?>ie8.css" type="text/css" media="screen" />
	<![endif]-->        
        
	
	<!-- Now that all the grids are loaded, we can move on to the actual styles. --> 
        <link rel="stylesheet" href="<?php echo CSS;?>style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo CSS;?>global.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo CSS;?>config.css" type="text/css" media="screen" />
        
        <script src="<?php echo JS;?>jquery.js"></script>

	<meta charset="UTF-8">
	<title>My Codeigniter App</title>
</head>
<body>

<div id="wrap">
	<div id="main">
            <header class="header">
                <div class="row clearfix">
                    <div class="left">
                        <a href="./index.php.html" id="logo">Muse</a>
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
                    <option value="index.php?t=dashboard">Dashboard</option>
                    <option value="forms.php?t=forms">Clients</option>
                    <option value="forms.php?t=forms">Projects</option>
                    <option value="forms.php?t=forms">Tasks</option>
					<option value="tables.php?t=tables">Users</option>
                    <option value="dialogbox.php?t=dialog+boxes">Settings</option>
                </select>

                <ul class="sf-menu mobile-hide row clearfix">
                    <li class="active iconed">
                        <a href="./index_db98c802.php.html"><span><img src="<?php echo IMG;?>header/icon_dashboard.png" /> Dashboard</span></a>
                    </li>
                    <li class=""><a href="./tables_d9c90247.php.html"><span>Clients</span></a></li>
					<li class=""><a href="./forms_bbaabe0f.php.html"><span>Projects</span></a></li>                 
					<li class=""><a href="./grids_5c4eb5f9.php.html"><span>Tasks</span></a></li>
                    <li class=""><a href="<?php echo SITE_URL?>users/index"><span>Users</span></a></li>
                    <li class=""><a href="./statistics_ad1c029b.php.html"><span>Settings</span></a></li>
                </ul>
            </nav>
			<div id="wrapper">
			<?php echo $yield; ?>
			</div>
