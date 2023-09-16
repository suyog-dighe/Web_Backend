<?php include('includes/header.php'); ?>
<div class="container-fluid">
<a href="science-student-feedback11" class="btn btn-primary btn-md  active" role="button" aria-pressed="true">Science</a>
    <a href="commerce-student-feedback11" class="btn btn-primary btn-md  " role="button" aria-pressed="true">Commerce</a>
    
    <br>
    <br>
    <a href="science-student-feedback11" class="btn btn-primary btn-md active " role="button" aria-pressed="true">11th</a>
    <a href="science-student-feedback12" class="btn btn-primary btn-md  " role="button" aria-pressed="true">12th</a>
    
    <div class="container-fluid">
        <div class="card">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col-md-5">Full Name</th>
                            <th scope="col-md-5">Mobile No.</th>
                            <th scope="col-md-5">Stream</th>
                            <th scope="col-md-5">Class</th>
                            <th scope="col-md-5">Feedback about Campus</th>
                            <th scope="col-md-5">About College</th>
                            <th scope="col-md-5">Suggestions</th>
                            
                           

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('function/myfunction.php');
                          $science_feedback11= getByData("Science","11th");
                          if(mysqli_num_rows($science_feedback11)>0)
                          {
                            foreach($science_feedback11 as $item)
                            {
                                ?>
                                    <tr>
                                    
                                        <td scope="col-md-5"><?=$item['name']; ?></td>
                                        <td scope="col-md-5"><?=$item['phone']; ?></td>
                                        <td scope="col-md-5"><?=$item['stream']; ?></td>
                                        <td scope="col-md-5"><?=$item['class']; ?></td>
                                        <td scope="col-md-5"><?=$item['feedbackcampus']; ?></td>
                                        <td scope="col-md-5"><?=$item['aboutcollege']; ?></td>
                                        <td scope="col-md-5"><?=$item['suggestions']; ?></td>
                                        
                                        
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
        <button type="submit" id="export_data" name='export_data4' value="Export to excel" class="btn btn-info">Export to excel</button>
      </form>
    </div>
  </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>