
<?php $session = $this->session->userdata('loginSession') ; ?>

<section class="wrapper">
            <div class=" container" >
                <div class="row" >
                    <div class="col-sm-3"></div>
                    <div class=" col-sm-6">
                        <div class=" panel panel-default" >
                            <div class=" panel-heading" style=" background-color: #099; color: #fff;" align="center">Welcome to O365 knowledgeShare</div>
                            <div class="panel-body">
                                <p>Review Top O365 Professionals solutions that could help you solve Microsoft Problems </p>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class=" row">
                <div class=" col-sm-1"></div>
                    <div class=" col-sm-10">
                        <form action="<?php echo base_url('message/search') ; ?>" method="post">
                            <div class=" form-group row" style=" color: #fff">
                                <div class=" col-sm-10">
                                    <input required="required" type="text" class="form-control" placeholder="Search here" name="search" style=" background-color: #099" >
                                </div>
                                <div class=" col-sm-2">
                                    <input type="submit" class="form-control" value="Search" style=" background-color: #099"> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
            <?php 
            if (isset($displayChat)){
                foreach($displayChat as $chat){
            
            ?>
                <section class="wrapper"><!--<div class="inner"> !--><!--<div class="flex flex-2"> !-->
                                                            <div class=" container" style=" margin-top:-10%; margin-bottom:-10%;">
                                                                <div class="  thumbnail  " style=" background-color:#099; padding: 3%; margin: 3%">
                                                                        <div class=" row">
                                                                            <div class=" col-sm-2 col-md-2" style=" align-content: center">
                                                                                <?php $userID = $chat->user_id; $ci =& get_instance() ; $username = $ci->newModel->fetchUName($userID) ;  foreach( $username as $name){  ?>
                                                                                <div class="" style="  text-align: center">
                                                                                    <img width="80" height="80" class=" img-circle" src="<?php  echo base_url('assets/uploads/'.$name->profile_picture ) ;  ?>" alt="" />
                                                                                </div> 
                                                                                <div class=" caption"style=" text-align: center">
                                                                                    <span style=" color: #fff; "><?php echo $name->uname ; } ?></span>
                                                                                </div>
                                                                            </div>

                                                                            <div class=" col-sm-8 col-md-10"style=" color:#fff">
                                                                                <h4 style=" color:#fff"><?php echo $chat->messageHeader ?></h4>
                                                                                <p style=" text-align: justify">  <?php echo $chat->message ?> </p>
                                                                                <p style="; justify-content:  space-around "> <span class=" glyphicon glyphicon-time"> </span><?php echo "  ".$chat->date ?> </p>
                                                                            </div>
                                                                        </div>
                                                                    <div class="row">
                                                                        <div class=" col-sm-2 col-md-2">
                                                                            
                                                                        </div>
                                                                        <div class=" col-sm-10 col-md-10">
                                                                            <div class=" panel panel-primary">
                                                                                
                                                                                <div class=" panel-body">
                                                                                    <?php if ($session){{  ?>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-11">
                                                                                            <form method="post" action="<?php echo base_url('message/addComment') ; ?>">
                                                                                                <div class=" form-group">
                                                                                                   <textarea name="comment" class=" form-control" id="message" placeholder="Enter a comment" rows="3" ></textarea> 
                                                                                                   <input name="userID" type="text" value="<?php  if(isset($session)){echo $this->session->userdata('id');} ?>" hidden=" hiddened"  >
                                                                                                   <input type="text" name="messageID" value="<?php echo $chat->messageID ?>" hidden=" hiddened" >
                                                                                                   <input type="text" name="titleID" value="<?php echo $chat->titleID ?>" hidden=" hiddened" >
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <div class=" col-sm-2">
                                                                                                        <button name="Submit" value="comment" class=" btn btn-info">Add comment</button>
                                                                                                    </div>
                                                                                                
                                                                                                    <div class="col-sm-1"></div>
                                                                                                    <div class="col-sm-2">
                                                                                                        <?php  ?>
                                                                                                        <?php $messageID = $chat->messageID ; $likes = $ci->newModel->get_count($messageID) ; ?>
                                                                                                        <button name="Submit" value="like" class="btn btn-success">Like <?php echo count($likes) ?></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php } } ?>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-11">
                                                                                            <?php 
                                                                                                  $messageID = $chat->messageID;
                                                                                            $ci =& get_instance() ; 
                                                                                            $comments = $ci->newModel->fetchcomment($messageID) ;  ?>
                                                                                                <?php foreach($comments as $comment) {  ?>
                                                                                               
                                                                                          <div class="Panel panel-success" style=" background-color: #099; color: #fff">
                                                                                                <?php $userID = $comment->userID; $ci =& get_instance() ; $username = $ci->newModel->fetchUName($userID) ;  foreach( $username as $name){  ?>
                                                                                                <div class=" panel-heading ">
                                                                                                        <img width="30" height="30" class=" img-circle" src="<?php echo base_url('assets/uploads/'.$name->profile_picture ) ;  ?>" alt="" />
                                                                                                        <span> <?php echo $name->uname ;  ?> </span> <span style=" float: right;" class=" glyphicon glyphicon-time fa fa-clock-o"><?php echo$comment->date ?></span>
                                                                                                </div>
                                                                                                <?php } ?>
                                                                                                <div class=" panel-body">
                                                                                                    <p><?php echo $comment->comment ;  ?></p> 
                                                                                                </div>
                                                                                            </div> 
                                                                                    <?php }?>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <?php # if(isset($check)){ ?>
                                                                                    
                                                                                    <?php #} ?>    
                                                                                </div>
                                                                            </div>
                                                                           
                                                                            <br>
                                                                            
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
							<!-- </div> !-->
                                            <!--    </div>  !-->
		</section>
            <?php }} ?>    
        <section class=" wrapper" style=" margin-top: -5%">
            <div class=" inner align-center">
                <ul class=" pagination">
                     <?php foreach ($links as $link) {?>
                    <li><?php echo $link ?></li>
                     <?php } ?>
                </ul>
            </div>
        </section>
        <?php $session = $this->session->userdata('loginSession') ?>
        <?php if(isset($session)) { ?>
       
</section>
<!-- <section class="wrapper">
						 <div class="inner"> 
							<div class="flex flex-2"> !-->
                                                            <div class=" container" style="padding-left: 10%; padding-right: 10%; margin-right:5% ">
                                                                <div class=" row  " style=" align-content: center;  background-color:#099; padding: 3%">
                                                                    <div class=" col-sm-12">
                                                                       <form method="post" action="<?php echo base_url('message/addChat') ?>">
                                                                            <div class="row uniform">
                                                                                <div class=" col-sm-2"></div>
                                                                                <div class=" col-sm-8" style=" align-content: center; ">
                                                                                    <h4 style=" color: #fff">Type in your solution to contribute </h4>
                                                                                </div>
                                                                            </div>
                                                                            <br><br>
                                                                            <div class="row uniform" style="color: #fff">
                                                                                <div class=" col-sm-2"></div>
                                                                                <div class=" col-sm-8" style=" align-content: center; ">
                                                                                    
                                                                                    <input type="text" name="messageHeader" id="name" value="" placeholder="Message Header" />
                                                                                    <input type="hidden" name="titleID" id="name" value="<?php if (isset($titleID) ){echo $titleID ; } ; ?>" placeholder=""  />
                                                                                    <input type="hidden" name="userID" id="name" value="<?php if (isset($id) ){echo $id ; } ; ?>" placeholder=""  />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row uniform" >
                                                                                <div class="col-sm-2"></div>
                                                                                <div class="col-sm-8" style="color: #fff">
                                                                                    <textarea name="messageName" id="message" placeholder="Enter your message" rows="5" ></textarea>
                                                                                </div>    
                                                                            </div>
                                                                               
                                                                                <div class=" row uniform ">
                                                                                    <div class=" col-sm-2"></div>
                                                                                   <div class="col-sm-10">
                                                                                        <ul class="actions">
                                                                                            <li><input type="submit" value="Add your Solution" /></li>
                                                                                            <li><input type="reset" value="Reset" class="alt btn-default" /></li>
                                                                                        </ul>
                                                                                    </div> 
                                                                                </div>
                                                                      </form> 
                                                                </div>
                                                                 </div>
                                                            </div>
						<!-- 	</div>
                                             </div> 
		</section> !-->
        <?php } ?>