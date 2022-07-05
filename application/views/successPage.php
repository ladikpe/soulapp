
<br><br><br><br>
<div class="container">
    <div class=" row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
            <div class=" panel panel-success">
                <div class=" panel-heading">
                    Welcome to success Page
                </div>
                <div class=" panel-body">
                    <table>
                        <tr>
                            <th> File name</th>
                            <th> FIle Value</th>
                        </tr>
                         <?php 
                        
                        foreach ( $upload_data as $dat=>$value ){
                            ?>
                        <tr>
                            <td><?php echo $dat; ?></td>
                            <td><?php  echo $value; ?></td>
                            
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>