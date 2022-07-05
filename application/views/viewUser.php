<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>
<?php if(isset($userInfo)) { ?>
				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
                                                     <?php foreach( $userInfo as $info){ ?>
							<header class="align-center">
								<h2>View <?php echo $info->firstName  ; ?></h2>
							</header>
                                                    <div class=" container" >
								<div class="row">
                                                                    <div class=" col-sm-2"></div>
									<div class="col-sm-8">
                                                                                        <form method="post" action="<?php echo base_url('newController/fetchAlldata'); ?>">
                                                                                           
                                                                                                <div class="row uniform">
                                                                                                        <div class="12u 12u$(xsmall)">
                                                                                                            <label class=" label"><?php echo form_error('id'); ?> ID</label>
                                                                                                            <input type="text" name="id" id="id" value="<?php echo set_value('id'); echo $info->id ;  ?>" readonly />
                                                                                                        </div>
                                                                                                        <div class="12u 12u$(xsmall)">
                                                                                                            <label class=" label"><?php echo form_error('userName'); ?> Username</label>
                                                                                                                <input type="text" name="userName" id="userName" value="<?php echo set_value('email'); echo $info->uname ; ?>" readonly />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall)">
                                                                                                            <label class=" col-form-labelcol-form-label"><?php echo form_error('email'); ?>Email</label>
                                                                                                                <input type="email" name="email" id="email" value="<?php echo set_value('email') ; echo $info->email ; ?>" readonly />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall)">
                                                                                                            <label class=" col-form-label"><?php echo form_error('firstName'); ?> First Name </label>
                                                                                                                <input type="text" name="firstName" id="firstName" value="<?php echo set_value('firstName') ; echo $info->firstName  ; ?>"readonly  />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall)">
                                                                                                            <label class=" col-form-label"><?php echo form_error('lastName'); ?> Last Name</label>
                                                                                                                <input type="text" name="lastName" id="email" value="<?php echo set_value('lastName'); echo $info->lastName ; ?>" readonly  />
                                                                                                        </div>
                                                                                                        <!-- Break -->
                                                                                                        <div class="12u$">
                                                                                                                <ul class="actions">
                                                                                                                        <li><input type="submit" value="View user" /></li>
                                                                                                                </ul>
                                                                                                        </div>
                                                                                                </div>
                                                                                            <?php  }?>
                                                                                        </form>	  
									</div>
                                                                       
								</div>
                                                        </div>							
						</div>
					</section>

			
<?php } ?>