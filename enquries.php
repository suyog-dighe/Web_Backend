<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-md-5">Sr.No</th>
                            <th scope="col-md-">Full Name</th>
                            <th scope="col-md-5">Email</th>
                            <th scope="col-md-5">Phone</th>
                            
                            <th scope="col-md-5">Subject</th>
                            <th scope="col-md-5">Message</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('function/myfunction.php');
                          $contact_us= getAll("contact_us");
                          if(mysqli_num_rows($contact_us)>0)
                          {
                            foreach($contact_us as $item)
                            {
                                ?>
                                    <tr>
                                        <td scope="col-md-5"><?=$item['id']; ?></td>
                                        <td scope="col-md-5"><?=$item['name']; ?></td>
                                        <td scope="col-md-5"><?=$item['email']; ?></td>
                                        <td scope="col-md-5"><?=$item['phone']; ?></td>
                                        <td scope="col-md-5"><?=$item['subject']; ?></td>
                                        <td scope="col-md-5"><?=$item['message']; ?></td>
                                        
                                        
                                    </tr>

                                 <?php

                            }
   
                          }
                          else
                          {
                                 echo "record not found";
                          }



                        ?>

                        
                    </tbody>
                </table>
            </div>
            <div class="well-sm col-sm-12">
    <div class="btn-group pull-right">  
      <form action="code/code" method="post">          
        <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
      </form>
    </div>
  </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>