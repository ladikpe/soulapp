
<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>
<?php if(isset($fetch_message)){ ?>
<?php foreach($fetch_message as $message){ ?>
<div class="container">
    <div class=" row">
        <div class=" col-sm-2"></div>
        <div class=" col-sm-8">
            <form method="post" action=" <?php echo base_url("message/updateMessage") ; ?>">
                <div class=" form-group row">
                    <div class=" col-sm-2">
                        <label>Message Header</label>
                    </div>
                    <div class="col-sm-9">
                        <input class=" form-control" name="messageHeader" value="<?php echo $message->messageHeader?>">
                        <input class=" form-control" name="messageHeader" value="<?php echo $message->messageID?>" hidden="hiddened">
                    </div>
                </div>
                <div class=" form-group row">
                    <div class=" col-sm-2">
                        <label>Message</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea class=" form-control" name="message" cols="15%" rows="12%" value="" ><?php echo $message->message; ?></textarea>
                    </div>
                </div>
                <div class=" form-group row">
                    <div class=" col-sm-2 col-md-2"></div>
                    <div class="col-sm-3 col-md-3">
                        <button type="submit" class=" btn btn-primary" value="">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } }?>