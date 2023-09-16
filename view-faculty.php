<?php include('includes/header'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">

            <div class="table-responsive table-dark">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col-md-5">Full name</th>
                            <th scope="col-md-5">Designation</th>
                            <th scope="col-md-5">Date of Joinging</th>
                            <th scope="col-md-5">qualification</th>
                            <th scope="col-md-5">Image</th>
                            <th scope="col-md-5">Option</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('function/myfunction');
                          $addmission= getAll("science");
                          if(mysqli_num_rows($addmission)>0)
                          {
                            foreach($addmission as $item)
                            {
                                ?>
                                    <tr>
                                        
                                        <td scope="col-md-5"><?=$item['name']; ?></td>
                                        <td scope="col-md-5"><?=$item['designation']; ?></td>
                                        <td scope="col-md-5"><?=$item['date']; ?></td>
                                        <td scope="col-md-5"><?=$item['qualification']; ?></td>
                                        <td scope="col-md-5"><img class="img" src="<?php echo "uploads/science_faculty/".$item['image'];  ?>" style="width: 200px; height: 200px;"></td>
                                        <td scope="col-md-5"><a href="edit-science?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a> <form action="code/code" method="POST"><input type="hidden" name="faculty_id" value="<?= $item['id']; ?>"> <button type="submit" class="btn btn-primary" name="delete_faculty_btn_science">Delete</button></form></td>   
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

    </div>
</div>

<?php include('includes/footer.php.php'); ?>