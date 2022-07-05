<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>

<section class="wrapper style1" style="align-content: center;margin-left: 10%; margin-right: 10%; margin-top: 5%">
        <div class="inner"style="margin-left: 10%; margin-right: 10%; float: center" >
            <form method="get" action="<?php echo base_url('message/selectCategory'); ?>">
                <div class="row uniform" style=" align-content: center">
                    <div class="6u$"  >
                        <div class="select-wrapper; align-center" >
                            <select name="category" id="category">
                                <option value="0"> Select Technology </option>
                                <option value="1"> OneDrive </option>
                                <option value="2"> Skype for Business </option>
                                <option value="3"> MS TEAM </option>
                                <option value="4"> SharePoint Online</option>
                                <option value="5"> Exchange Online</option>
                            </select>
                         </div>
                    </div>
                    <div class="12u$">
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                        <li><input type="reset" value="Reset" class="alt" /></li>
                    </ul>
                    </div>
                </div>
            </form>
            <?php if(isset($categoryData)) { ?>
                <table class=" table table-borderer table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($categoryData as $data ) {?>
                        <tr>
                            <td><a href="<?php echo base_url('message/selectCategory/'.$data->titleID ) ; ?>"><?php echo $data->titleID ?></a></td>
                            <td><a href="<?php echo base_url('message/selectCategory/'.$data->titleID ) ; ?>"><?php echo $data->titleName ?></a></td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
 </section>