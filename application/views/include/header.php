
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
			<script src="<?php echo base_url('assets/js/jquery.scrolly.min.js') ; ?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.scrollex.min.js') ; ?>"></script>
			<script src="<?php echo base_url('assets/js/skel.min.js') ;  ?>"></script>
			<script src="<?php echo base_url('assets/js/util.js') ; ?>"></script>
                        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ; ?>"></script>
                        <script src="<?php echo base_url('assets/js/jquery2.min.js') ; ?>"></script>
			<script src="<?php echo base_url('assets/js/main.js') ; ?>"></script>
                        <script src="<?php echo base_url('assets/boostrap/jquery.min.js') ; ?>"></script>
                        <script src="<?php echo base_url('assets/boostrap/bootstrap.min.js') ; ?>"></script>
                        
        

	</head>
	<body>

		<!-- Header -->
			
<?php 
    $session = $this->session->userdata('loginSession') ;
       
       ?>
                
<nav class="navbar navbar-inverse" style=" background-color: #000;" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('pointer/redirectHomepage') ; ?>">
            O365 <span style=" color: red">KnowledgeShare</span>
        </a>
    </div>
    <div class=" navbar-right">
        <ul class="nav navbar-nav">
            <?php if (isset( $session)){   ?>
            <li class="active" style=" color: #fff">Welcome <?php echo $this->session->userdata('firstName') ; ?></li>
            <?php } ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Menu <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" style="background-color: #000 ">
					<li><a href="<?php echo base_url('pointer/redirectHomepage') ; ?>">Home</a></li>
                                        <?php if (isset( $session)){ ?> <li><a href="<?php echo base_url('pointer/uploadPicture') ; ?>">upload Picture</a></li> 
					<li><a href="<?php echo base_url('newController/logout') ; ?>">logout</a></li>
                                        <?php } ?>       
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
                                        <li><a href="<?php echo base_url('rocketChatRoles/Get_role_list') ; ?>">Test rocket</a></li>
                </ul>
            </li>
        </ul>
    </div>
                    
</nav>
                


		<!-- Main -->