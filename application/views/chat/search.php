
<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>
<div class=" container" >
                <div class="row" >
                    <div class="col-sm-3"></div>
                    <div class=" col-sm-6">
                        <div class=" panel panel-default" >
                            <div class=" panel-heading" style=" background-color: #099; color: #fff;" align="center">Welcome to O365 KnowledgeShare</div>
                            <div class="panel-body">
                                <h4>Welcome you to O365 KnowledgeShare</h4>
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
                                    <input type="text" class="form-control" placeholder=" Search here" name="search" style=" background-color: #099" >
                                </div>
                                <div class=" col-sm-2">
                                    <input type="submit" class="form-control" value="Search" style=" background-color: #099"> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</div>
     <?php if(isset($searchResult)){ ?>
    <?php  ?>
    <?php  if(!$searchResult) { ?>
    <div class=" container" style=" margin-right: 5%; margin-right:5% ">
                                                                <div class="  thumbnail  " style=" background-color:#099; padding: 3%; margin: 3%">
                                                                        <div class=" row">
                                                                            <div class=" col-sm-2 col-md-2"></div>
                                                                            <div class=" col-sm-10">
                                                                                <h4>No Search result found</h4>
                                                                            </div>
                                                                        </div>
                                                                </div>
    </div>
        
    <?php }?>
     <?php foreach ( $searchResult as $search){ ?>
                <section class="wrapper">
						<!--<div class="inner"> !-->
							<!--<div class="flex flex-2"> !-->
                                                            
                                                            <div class=" container" style=" margin-top:-10%; margin-bottom:-10%; margin-right: 5%; margin-right:5% ">
                                                                <div class="  thumbnail  " style=" background-color:#099; padding: 3%; margin: 3%">
                                                                        <div class=" row">
                                                                            <div class=" col-sm-2 col-md-2">
                                                                                <?php $userID = $search->user_id; $ci =& get_instance() ; $username = $ci->newModel->fetchUName($userID) ;  foreach( $username as $name){  ?>
                                                                                <div class="">
                                                                                    <img width="50" height="50" class=" img-circle" src="<?php  echo base_url('assets/uploads/'.$name->profile_picture ) ;  ?>" alt="" />
                                                                                </div> 
                                                                                <div class=" caption" float: none>
                                                                                    <span style=" color: #fff; "><?php echo $name->uname ; } ?></span>
                                                                                </div>
                                                                            </div>

                                                                            <div class=" col-sm-8 col-md-10"style=" color:#fff">
                                                                                <h4 style=" color:#fff"><?php echo $search->messageHeader ?></h4>
                                                                                <p style=" margin-right:">  <?php echo $search->message ?> </p>
                                                                                <p style="; justify-content:  space-around "> <span class=" glyphicon glyphicon-time"> </span><?php echo "  ".$search->date ?> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                        <div class=" col-sm-2 col-md-2">
                                                                            
                                                                        </div>
                                                                        <div class=" col-sm-10 col-md-10">
                                                                            <div class=" panel panel-primary">
                                                                                
                                                                                <div class=" panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-11">
                                                                                            <form method="post" action="<?php echo base_url('message/addComment') ; ?>">
                                                                                                <div class=" form-group">
                                                                                                   <textarea name="comment" class=" form-control" id="message" placeholder="Enter a comment" rows="3" ></textarea> 
                                                                                                   <input name="userID" type="text" value="<?php  if(isset($session)){echo $this->session->userdata('id');} ?>" hidden=" hiddened"  >
                                                                                                   <input type="text" name="messageID" value="<?php echo $search->messageID ?>" hidden=" hiddened" >
                                                                                                   <input type="text" name="titleID" value="<?php echo $search->titleID ?>" hidden=" hiddened" >
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <div class=" col-sm-2">
                                                                                                        <button name="Submit" value="comment" class=" btn btn-info">Add comment</button>
                                                                                                    </div>
                                                                                                
                                                                                                    <div class="col-sm-1"></div>
                                                                                                    <div class="col-sm-2">
                                                                                                        <?php  ?>
                                                                                                        <?php $messageID = $search->messageID ; $likes = $ci->newModel->get_count($messageID) ; ?>
                                                                                                        <button name="Submit" value="like" class="btn btn-success">Like <?php echo count($likes) ?></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-11">
                                                                                            <?php 
                                                                                                  $messageID = $search->messageID;
                                                                                            $ci =& get_instance() ; 
                                                                                            $comments = $ci->newModel->fetchcomment($messageID) ; 
                                                                                            foreach($comments as $comment) {  ?>
                                                                                    
                                                                                            <div class="Panel panel-success" style=" background-color: #099; color: #fff">
                                                                                                <?php $userID = $comment->userID; $ci =& get_instance() ; $username = $ci->newModel->fetchUName($userID) ;  foreach( $username as $name){  ?>
                                                                                                <div class=" panel-heading ">
                                                                                                        <img width="30" height="30" class=" img-circle" src="<?php  echo base_url('assets/uploads/'.$name->profile_picture ) ;  ?>" alt="" />
                                                                                                        <span> <?php echo $name->uname ;  ?> </span> <span style=" float: right;" class=" glyphicon glyphicon-time fa fa-clock-o"><?php echo$comment->date ?></span>
                                                                                                </div>
                                                                                                <?php } ?>
                                                                                                <div class=" panel-body">
                                                                                                    <p><?php echo $comment->comment ;  ?></p> 
                                                                                                </div>
                                                                                            </div>
                                                                                            <hr>
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
     <?php  } }?>
            </div>

