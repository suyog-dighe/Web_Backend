<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <h3>Notice Display On Main Page</h3>
            <?php

            include('config/dbcon.php');
            $query = "SELECT description from notice ";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $data) {
                    ?>
                    <div class="container-fluid">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <label for="">Current Notice:</label>
                                    <h4>
                                        <?= $data['description']; ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                }
            }

            ?>
            
            <form action="code/code" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Change Notice</label>
                    <textarea name="notice_des" placeholder="Enter New Notice With Any Notation " class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="notice">Update</button>
            </form>
        </div>
    </div>
</div>
<?php include('includes/footer.php');