<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">


            <h3 class="mb-2">Add Faculty </h3>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#science">Science</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#commerce">Commerce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#competative">Competative</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="science">
                    <div class="row border g-0 rounded shadow-sm">
                        <div class="card">
                            <div class="card-body">
                                <form action="code/code" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Enter Full Name
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Faculty Name">

                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="" class="form-label">Designation
                                        </label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date of Joinning
                                        </label>
                                        <input type="date" class="form-control" id="name" name="date" placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Qualification</label>
                                        <textarea name="qualification" placeholder="enter Qualification"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="Upload faculty Image">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="add-faculty-science">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="commerce">
                    <div class="row border g-0 rounded shadow-sm">
                    <div class="card">
                            <div class="card-body">
                                <form action="code/code" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Enter Full Name
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Faculty Name">

                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="" class="form-label">Designation
                                        </label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date of Joinning
                                        </label>
                                        <input type="date" class="form-control" id="name" name="date" placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Qualification</label>
                                        <textarea name="qualification" placeholder="Enter Qualification"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="Upload faculty Image">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="add-faculty-commerce">Submit</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="tab-pane" id="competative">
                    <div class="row border g-0 rounded shadow-sm">
                    <div class="card">
                            <div class="card-body">
                                <form action="code/code" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Enter Full Name
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Faculty Name">

                                    </div>
                                   
                                    <div class="mb-3">
                                        <label for="" class="form-label">Designation
                                        </label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date of Joinning
                                        </label>
                                        <input type="date" class="form-control" id="name" name="date" placeholder="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Qualification</label>
                                        <textarea name="qualification" placeholder="Enter Qualification"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="Upload faculty Image">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="add-faculty-competative">Submit</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script





<?php include('includes/footer.php'); ?>