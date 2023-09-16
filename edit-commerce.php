<?php include('includes/header'); ?>
<?php include('function/myfunction'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Faculty </h5>
                <div class="card">
                    <div class="card-body">
                        <?php

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $view_faculty = getByID("commerce", $id);
                            if (mysqli_num_rows($view_faculty) > 0) {
                                $data = mysqli_fetch_array($view_faculty);


                                ?>
                                <form action="code/code" method="POST" enctype="multipart/form-data" >
                                    <div class="mb-3">
                                        <input type="hidden" name="faculty_id" value="<?= $data['id'] ?>">
                                        <label for="" class="form-label">Enter Full Name
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="<?= $data['name'] ?>" placeholder="Enter Faculty Name">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Designation
                                        </label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            value="<?= $data['designation'] ?>" placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date of Joinning
                                        </label>
                                        <input type="date" class="form-control" id="name" name="date" value="<?= $data['date'] ?>" placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Qualification
                                        </label>
                                        <textarea rows="" name="qualification" id="qualification" value="<?= $data['qualification'] ?>"
                                            placeholder="Enter Qualification" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image" class="form-control" placeholder="Upload faculty Image">
                                        <div class="container-fluid">
                                            <div class="container-fluid">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <label for="">Current image</label>
                                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>" >
                                                        <img src="uploads/commerce_faculty/<?= $data['image'] ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="update-faculty-commerce">Submit</button>
                                </form>

                                <?php
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include("includes/footer.php");?>