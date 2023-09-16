<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-md-5">Sr.no</th>
                            <th scope="col-md-5">Full name</th>
                            <th scope="col-md-5">Previous School</th>
                            <th scope="col-md-5">Address</th>
                            <th scope="col-md-5">Taluka</th>
                            <th scope="col-md-5">District</th>
                            <th scope="col-md-5">Branch</th>
                            <th scope="col-md-5">Student Mobile</th>
                            <th scope="col-md-5">Paraent Mobile</th>
                            <th scope="col-md-5">Category</th>
                            <th scope="col-md-5">Ssc Borad</th>
                            <th scope="col-md-5">Parent Name</th>
                            <th scope="col-md-5">Occupation</th>
                            <th scope="col-md-5">Hostel</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('function/myfunction.php');
                          $addmission= getAll("addmission");
                          if(mysqli_num_rows($addmission)>0)
                          {
                            foreach($addmission as $item)
                            {
                                ?>
                                    <tr>
                                        <td scope="col-md-5"><?=$item['id']; ?></td>
                                        <td scope="col-md-5"><?=$item['fname']; ?></td>
                                        <td scope="col-md-5"><?=$item['previousschool']; ?></td>
                                        <td scope="col-md-5"><?=$item['address']; ?></td>
                                        <td scope="col-md-5"><?=$item['taluka']; ?></td>
                                        <td scope="col-md-5"><?=$item['district']; ?></td>
                                        <td scope="col-md-5"><?=$item['branch']; ?></td>
                                        <td scope="col-md-5"><?=$item['studentphone']; ?></td>
                                        <td scope="col-md-5"><?=$item['parentphone']; ?></td>
                                        <td scope="col-md-5"><?=$item['category']; ?></td>
                                        <td scope="col-md-5"><?=$item['sscboard']; ?></td>
                                        <td scope="col-md-5"><?=$item['pname']; ?></td>
                                        <td scope="col-md-5"><?=$item['occupation']; ?></td>
                                        <td scope="col-md-5"><?=$item['hostel']; ?></td>
                                        
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
            
        </div>
        <div class="well-sm col-sm-12">
    <div class="btn-group pull-right">  
      <form action="code/code" method="post">          
        <button type="submit" id="export_data" name='export_data1' value="Export to excel" class="btn btn-info">Export to excel</button>
      </form>
    </div>
  </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>