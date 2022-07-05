
<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>
<div id="mobileView" onload="mobileView()" class=" container">
    <div class=" row">
        <div class=" col-sm-1"></div>
        <div class=" col-sm-10">
            <table id="userInfo" class=" dataTable dataTables_wrapper" >
                <thead>
                    <tr>
                        <th> Message ID</th>
                        <th>Message Header</th>
                        <th> Message</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($fetchChat as $chat) { ?>
                    <tr>
                        <td><?php echo $chat->messageID?></td>
                        <td><?php echo $chat->messageHeader?></td>
                        <td><?php echo $chat->message ?></td>
                        <td class=""><?php echo $chat->date ?></td>
                        <td><a href="<?php echo base_url('message/editChat/'.$chat->messageID) ; ?>">Edit</a></td>
                        <td><a href="<?php echo base_url('message/seeChat/'.$chat->messageID) ?>">View</a></td>
                        <td><a href="<?php echo base_url('message/deleteChat/'.$chat->messageID)  ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

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

		
                        

	</body>
</html>

<script>
                                     document.getElementById('mobileView').addEventListener('load', mobileView);
                                     function mobileView(){
                                     if (screen.width <= 699) {
                                         document.getElementById('mobileView').style.marginTop = "70%";
                                     }
                                     }
                                 </script> 
    
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dataTable/jquery.dataTables.css') ?>">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dataTable/jquery.dataTables_themeroller.css') ?>">


   <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/dataTable/jquery-1.7.1.min.js') ?>"></script>

   <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/dataTable/jquery.dataTables.min.js') ; ?>"></script>

   <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#userInfo').dataTable( );
                                    } );
                                 </script>   
         
                                                          