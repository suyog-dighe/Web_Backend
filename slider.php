<?php include('includes/header.php'); ?>


<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Change Slider</h5>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#Image1">First Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#Image2">Second Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#Image3"> Third Image</a>
                </li>
            </ul>



            <div class="tab-content">
                <div class="tab-pane active" id="Image1">
                    <div class="row border g-0 rounded shadow-sm">
                        <div class="card">
                            <div class="card-body">
                                <?php

                                include('config/dbcon.php');
                                $query = "SELECT image from slider where id=1";
                                $query_run = mysqli_query($con, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $data) {
                                        ?>
                                        <div class="container-fluid">
                                            <div class="container-fluid">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <label for="">Current image:</label>
                                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                        <img class="img-resposive" src="uploads/slider/<?= $data['image'] ?>"
                                                            alt="slider's first image" style="width: 200px; height: 200px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                    }
                                }

                                ?>
                                <form action="code/code" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-5">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image1" class="form-control">
                                    </div>
                                    <br>
                                    <div class="col-md-12 ">
                                        <button type="submit" class="btn btn-primary" name="image1">upload</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="Image2">
                    <div class="row border g-0 rounded shadow-sm">
                        <div class="card">
                            <div class="card-body">
                                <?php

                                include('config/dbcon');
                                $query = "SELECT image from slider where id=2";
                                $query_run = mysqli_query($con, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $data) {
                                        ?>
                                        <div class="container-fluid">
                                            <div class="container-fluid">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <label for="">Current image:</label>
                                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                        <img class="img-resposive" src="uploads/slider/<?= $data['image'] ?>" alt="" style="width: 200px; height: 200px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                    }
                                }
                                ?>
                                <form action="code/code" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-5">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image2" class="form-control">
                                        <br>
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary" name="image2">upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Image3">
                    <div class="row border g-0 rounded shadow-sm">
                        <div class="card">
                            <div class="card-body">
                                <?php

                                include('config/dbcon');
                                $query = "SELECT  image from slider where id=3";
                                $query_run = mysqli_query($con, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $data) {
                                        ?>
                                        <div class="container-fluid">
                                            <div class="container-fluid">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <label for="">Current image:</label>
                                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                        <img class="img-resposive" src="uploads/slider/<?= $data['image'] ?>" alt="" style="width: 200px; height: 200px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                    }
                                }
                                ?>
                                <form action="code/code" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-5">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image3" class="form-control">
                                        <br>
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary" name="image3">upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?php include('includes/footer.php'); ?>