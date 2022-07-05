<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>

		<!-- Main -->
			<div id="main">
                            <section class="wrapper style1">
						<div class="inner">
                                                    <div class="row">
                                                        <div class=" col-sm-3">
                                                            
                                                        </div>
                                                        
                                                        <div class=" col-sm-6">
                                                            
                                                            <form method="post" action="<?php echo base_url('newController/submitForm'); ?>">
                                                                <div class="well">
                                                            <h4 class=" align-center">Please enter  registration details</h4><hr>
                                                                                                <div class="row   ">
                                                                                                        <div class="12u$ 12u$(xsmall) form-group">
                                                                                                            <label class=" col-form-labelcol-form-label " style=" color:red"><?php echo form_error('userName'); ?></label>
                                                                                                                <input type="text" name="userName" id="userName" value="<?php echo set_value('userName') ; ?>" placeholder="username" />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall) form-group">
                                                                                                            <label class=" col-form-labelcol-form-label"><?php echo form_error('email'); ?></label>
                                                                                                                <input type="email" name="email" id="email" value="<?php echo set_value('email') ; ?>" placeholder="Email" />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall) form-group">
                                                                                                            <label class=" col-form-label"><?php echo form_error('firstName'); ?> </label>
                                                                                                                <input type="text" name="firstName" id="firstName" value="<?php echo set_value('firstName') ; ?>" placeholder="First Name" />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall) form-group">
                                                                                                            <label class=" col-form-label"><?php echo form_error('lastName'); ?></label>
                                                                                                                <input type="text" name="lastName" id="email" value="<?php echo set_value('lastName') ; ?>" placeholder="Last Name" />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall) form-group">
                                                                                                            <label class=" col-form-label" style=" color: red"><?php echo form_error('password'); ?></label>
                                                                                                                <input type="password" name="password" id="password" value="<?php echo set_value('password') ?>" placeholder="Password" />
                                                                                                        </div>
                                                                                                        <div class="12u$ 12u$(xsmall) form-group">
                                                                                                            <label class=" col-form-label"><?php echo form_error('confirmPassword'); ?></label>
                                                                                                            <input type="password" name="confirmPassword" id="confirmPassword" value="" placeholder="Confirm Password" />
                                                                                                        </div>
                                                                                                        <div class="8u$ 12u$(small) form-group">
                                                                                                                <label class=" col-form-label" style=" color: red"><?php echo form_error('human'); ?></label>
                                                                                                                <input type="checkbox" id="human" name="human" checked>
                                                                                                                <label for="human">I am a human and not a robot</label>
                                                                                                        </div>
                                                                                                        <!-- Break -->
                                                                                                        <div class="12u$ form-group">
                                                                                                                <ul class="actions">
                                                                                                                        <li><input type="submit" value="Submit" /></li>
                                                                                                                        <li><input type="reset" value="Reset" class="alt" /></li> 
                                                                                                                        <li><a class=" btn btn-success" href="<?php echo base_url('pointer/loginPointer') ; ?>">Login</a></li>
                                                                                                                </ul>
                                                                                                        </div>
                                                                                                </div>
                                                            </div>
                                                                                        </form>
                                                        </div>
                                                        
                                                    </div>	
                                                   