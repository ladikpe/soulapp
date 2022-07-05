
<html>
	<head>
		<title>LinuxTek</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ; ?>" />
                <link rel="stylesheet" href="<?php echo base_url('assets/css/docs.min.css') ; ?>" />
                <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/docs.min.css') ; ?>" />
                <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/jquery.dataTable.min.css') ; ?>" />
                <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css') ; ?>" />
                
                
                <!-- Scripts -->
                
                   <script src="<?php echo base_url('assets/js/jquery.min.js') ; ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.scrolly.min.js') ; ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.scrollex.min.js') ; ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/skel.min.js') ;  ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/util.js') ; ?>"></script>
                        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ; ?>"></script>
                        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery2.min.js') ; ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ; ?>"></script>
                        <script type="text/javascript" src="<?php echo base_url('assets/boostrap/jquery.min.js') ; ?>"></script>
                        <script type="text/javascript" src="<?php echo base_url('assets/boostrap/bootstrap.min.js') ; ?>"></script>
			
	</head>
	<body>



<?php 
    $session = $this->session->userdata('loginSession') ;
    
   if (isset( $session)){ 
       
       ?>
<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">O365 <span>KnowledgeShare</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?php echo base_url('pointer/redirectHomepage') ; ?>">Home</a></li>
					<li><a href="<?php echo base_url('pointer/uploadPicture') ; ?>">upload Picture</a></li>
					<li><a href="<?php echo base_url('newController/logout') ; ?>">logout</a></li>
                                        <?php if($this->session->userdata('email')=='linuxtek@gm.com') {?>
                                        <li><a href="<?php echo base_url('newController/fetchAlldata') ; ?>">View Users</a></li>
                                        <?php } ?>
                                        <?php if($this->session->userdata('email')=='linuxtek@gm.com') {?>
                                        <li><a href="<?php echo base_url('message/fetchAllChat') ; ?>">View Contribution </a></li>
                                        <?php } ?>
                                        <li><a href="<?php echo base_url('message/getOneDrive') ; ?>">OneDrive</a></li>
                                        <li><a href="<?php echo base_url('message/getSharePoint') ; ?>">SharePoint</a></li>
                                        <li><a href="<?php echo base_url('message/getSfb') ; ?>">Skype for Business</a></li>
                                        <li><a href="<?php echo base_url('message/getMSTEams') ; ?>">MS Teams</a></li>
                                        <li><a href="<?php echo base_url('message/getExchangeOnline') ; ?>">Exchange Online</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			
   <?php } ?>
