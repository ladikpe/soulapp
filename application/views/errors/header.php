
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
                
	</head>
	<body>
<?php 
    $session = $this->session->userdata('loginSession') ;
    #$email = $session->email ;
   if (isset( $session)){ 
       
       ?>
		<!-- Header -->
                <header id="header">
				<div class="logo"><a href="<?php echo base_url('pointer/redirectHomepage') ; ?>">LinuxTek <span>Technologies</span></a></div>
				<a href="#menu">Menu</a>
                </header>

<br><br>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?php echo base_url('pointer/redirectHomepage') ; ?>">Home</a></li>
					<li><a href="<?php echo base_url('generic.html') ; ?>">Services</a></li>
					<li><a href="<?php echo base_url('newController/logout') ; ?>">logout</a></li>
                                        <li><a href="<?php echo base_url('message/getOneDrive') ; ?>">OneDrive</a></li>
                                        <li><a href="<?php echo base_url('message/getSharePoint') ; ?>">SharePoint</a></li>
                                        <li><a href="<?php echo base_url('message/getSfb') ; ?>">Skype for Business</a></li>
                                        <li><a href="<?php echo base_url('message/getMSTEams') ; ?>">MS Teams</a></li>
                                        <li><a href="<?php echo base_url('message/getExchangeOnline') ; ?>">Exchange Online</a></li>
				</ul>
			</nav>
 <li>Welcome <?php echo $this->session->userdata('firstName') ; ?></li>
	
<?php } ?>
		<!-- Main -->
                
               