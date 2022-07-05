

		<!-- Main -->
			<div id="main">
                            <section class="wrapper style1">
							<!-- 2 Columns -->
                                                        <div class="container" >
                                                            
                                                            <div class="row">
                                                                <div class=" col-sm-3">
                                                                    
                                                                </div>
                                                                <div class=" col-sm-6">
                                                                    <div class=" well">
                                                                    <h4 class=" align-center text-info">Please enter login details </h4><hr>
                                                                    <form method="post" action="<?php echo base_url('rocketChaTAPI/apicall'); ?>">
                                                                        <div class="row uniform">
                                                                            <div class="12u 12u$(xsmall)">
                                                                                <?php if( isset($loginError)){ ?>
                                                                                <label class=" col-form-labelcol-form-label" style=" color:red"> <?php echo $loginError ; ?> </label>
                                                                                <?php  }?>
                                                                                                            
                                                                                                             
                                                                                <label class=" label"><?php echo form_error('userName'); ?></label>
                                                                                <input type="text" name="userName" id="userName" value="<?php echo set_value('userName') ; ?>" placeholder="username" />
                                                                            </div>
                                                                            <div class="12u$ 12u$(xsmall)">
                                                                                <label class=" col-form-label col-form-label"><?php echo form_error('password'); ?></label>
                                                                                <input type="password" name="password" id="password" value="<?php echo set_value('password') ; ?>" placeholder="Password" />
                                                                            </div>
                                                                            <div class="12u 12u$(xsmall)">
                                                                                <?php if( isset($loginError)){ ?>
                                                                                <label class=" col-form-labelcol-form-label" style=" color:red"> <?php echo $loginError ; ?> </label>
                                                                                <?php  }?>
                                                                                                            
                                                                                                             
                                                                                <label class=" label"><?php echo form_error('name'); ?></label>
                                                                                <input type="text" name="name" id="name" value="<?php echo set_value('name') ; ?>" placeholder="Name" />
                                                                            </div>
                                                                            <div class="12u 12u$(xsmall)">
                                                                                <?php if( isset($loginError)){ ?>
                                                                                <label class=" col-form-labelcol-form-label" style=" color:red"> <?php echo $loginError ; ?> </label>
                                                                                <?php  }?>
                                                                                                            
                                                                                                             
                                                                                <label class=" label"><?php echo form_error('email'); ?></label>
                                                                                <input type="text" name="email" id="email" value="<?php echo set_value('email') ; ?>" placeholder="Email" />
                                                                            </div>
                                                                                                        <!-- Break -->
                                                                            <div class="12u$">
                                                                                <ul class="actions">
                                                                                    <li><input class="form-control" type="submit" value="Submit" /></li>
                                                                                    <li><a class="btn btn-success" href="<?php echo base_url('pointer/regPointer') ; ?>">Register</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
					</section>
			</div>