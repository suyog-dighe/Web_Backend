<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <a href="science-faculty" class="btn btn-primary btn-md active " role="button" aria-pressed="true">Science</a>
    <a href="commerce-faculty" class="btn btn-primary btn-md " role="button" aria-pressed="true">Commerce</a>
    <a href="competative-faculty" class="btn btn-primary btn-md " role="button" aria-pressed="true">Competitive</a>

    <div class="container-fluid">
        <div class="card">


            <h5 class="card-title fw-semibold mb-4"><br>Science Department Faculties</h5>
            <div class="table-responsive table-dark">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col-md-5">Full name</th>
                            <th scope="col-md-5">Designation</th>
                            <th scope="col-md-5">Date of Joinging</th>
                            <th scope="col-md-5">qualification</th>
                            <th scope="col-md-5">Image</th>
                            <th scope="col-md-4">Edit</th>
                            <th scope="col-md-4">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('function/myfunction.php');
                        $science = getAll("science");
                        if (mysqli_num_rows($science) > 0) {
                            foreach ($science as $item) {
                                ?>
                                <tr>

                                    <td scope="col-md-5">
                                        <?= $item['name']; ?>
                                    </td>
                                    <td scope="col-md-5">
                                        <?= $item['designation']; ?>
                                    </td>
                                    <td scope="col-md-5">
                                        <?= $item['date']; ?>
                                    </td>
                                    <td scope="col-md-5">
                                        <?= $item['qualification']; ?>
                                    </td>
                                    <td scope="col-md-5"><img class="img"
                                            src="<?php echo "uploads/science_faculty/" . $item['image']; ?>"
                                            style="width: 200px; height: 200px;"></td>
                                    <td scope="col-md-4"><a href="edit-science?id=<?= $item['id']; ?>"
                                            class="btn btn-primary">Edit</a> </td>
                                    <td scope="col-md-4">
                                        <form action="code/code" method="POST"><input type="hidden" name="faculty_id"
                                                value="<?= $item['id']; ?>"> <button type="submit" class="btn btn-primary"
                                                name="delete_faculty_btn_science">Delete</button></form>
                                    </td>
                                </tr>

                                <?php

                            }

                        } else {
                            echo "record not found";
                        }



                        ?>


                    </tbody>

                </table>
            </div>


        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>