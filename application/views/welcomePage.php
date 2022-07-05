<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?> 

<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/jquery.dataTable.min.css') ; ?>" />
 <script src="<?php echo base_url('assets/js/jquery.min.js') ; ?>"></script>
			

<?php 
$session = $this->session->userdata('loginSession') ;
if (isset( $session ) or isset( $fetchRecord) ){ ?>
				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Users Table</h2>
							</header>
                                                    <div class="row">
                                                        <div class=" col-sm-2"></div>
                                                        <div class=" col-sm-8">
                                                            <table id="userInfo" class="">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">User name</th>
                                                                    <th scope="col">Edit</th>
                                                                    <th scope="col">View</th>
                                                                    <th scope="col">Delete</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($fetchRecord as $record ) { ?>
                                                                  <tr>
                                                                    <td scope="row"><?php echo $record->id ?></td>
                                                                    <td><?php echo $record->firstName ?></td>
                                                                    <td><?php echo $record->lastName ?></td>
                                                                    <td><?php echo $record->email?></td>
                                                                    <td><?php echo $record->uname?></td>
                                                                    <td><a href="<?php echo base_url('newController/editUser/'.$record->id) ; ?>">Edit</a></td>
                                                                    <td><a href="<?php echo base_url('newController/viewUser/'.$record->id) ; ?>" >View</a></td>
                                                                    <td><a href="<?php echo base_url('newController/deleteUser/'.$record->id)?>">Delete</a></td>
                                                                  </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
						</div>
					</section>

                                

		
<?php }else {
    
    $this->load->view('include/header');
    $this->load->view('loginPage');
    $this->load->view('include/footer');
} ?>
                                
                              <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dataTable/jquery.dataTables.css') ?>">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dataTable/jquery.dataTables_themeroller.css') ?>">


   <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/dataTable/jquery-1.7.1.min.js') ?>"></script>

   <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/dataTable/jquery.dataTables.min.js') ; ?>"></script>

                                  <script>
                                    $(document).ready(function() {
                                        $('#userInfo').DataTable( );
                                    } );
                                 </script>
                                 
   
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="#">LinuxTek</a> Technologies </p>
				</div>
			</footer>

		<!-- Scripts -->
			
                        

	</body>
</html>                              