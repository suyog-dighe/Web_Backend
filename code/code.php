<?php
session_start();
include('../config/dbcon.php');



if (isset($_POST['add-faculty-science'])) {
    $name = $_POST['name'];
    
    $designation = $_POST['designation'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $qual = $_POST['qualification'];
    $image = $_FILES['image']['name'];
    $path = "../uploads/science_faculty";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $query = "insert into science (name,designation,date,qualification,image)
    values ('$name','$designation','$date','$qual','$filename')";


    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='../add-faculty'}else{document.location.href='add-faculty'};</script>";

    } else {
        echo "Not Uploades ";
    }
} else if (isset($_POST['update-faculty-science'])) {
    $id = $_POST['faculty_id'];
    $name = $_POST['name'];
    
    $designation = $_POST['designation'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $qual = $_POST['qualification'];
    $new_image = $_FILES['image']['name'];
    $path = "../uploads/science_faculty";
    $old_image = $_POST['old_image'];
    if ($new_image != null) {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;

    } else {
        $update_filename = $old_image;
    }
    $update_query = "update science set name='$name',designation='$designation',date='$date',qualification='$qual',image='$update_filename' where id='$id'";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image']['name'] != null) {
            $update_file = "../uploads/science_faculty" . $old_image;
            if (file_exists($update_file)) {
                unlink($update_file);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            echo "<script>if(confirm('Record is Updated. ')){document.location.href='../science-faculty'};</script>";

        }
    } else {
        echo "<script>if(confirm('Record is Updated. ')){document.location.href='../science-faculty'};</script>";
    }
} else if (isset($_POST['delete_faculty_btn_science'])) {
    $faculty_id = mysqli_real_escape_string($con, $_POST['faculty_id']);

    $category_query = "SELECT * from science where id='$faculty_id'";
    $category_query_run = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);

    $image = $category_data['image'];
    $delete_query = "DELETE from science where id='$faculty_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {
        echo "<script>if(confirm('Your Record Delete Sucessfully. ')){document.location.href='../science-faculty'};</script>";

        if (file_exists("../uploads/science_faculty" . $old_image)) {
            unlink("../uploads/science_faculty" . $old_image);
        }

    }
}
 else if (isset($_POST['add-faculty-commerce'])) {
    $name = $_POST['name'];
    
    $designation = $_POST['designation'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $qual = $_POST['qualification'];
    $image = $_FILES['image']['name'];
    $path = "../uploads/commerce_faculty";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $query = "insert into commerce (name,designation,date,qualification,image)
    values ('$name','$designation','$date','$qual','$filename')";


    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='../commerce-faculty'}else{document.location.href='add-faculty'};</script>";

    } else {
        echo "Not Uploades ";
    }
} else if (isset($_POST['update-faculty-commerce'])) {
    $id = $_POST['faculty_id'];
    $name = $_POST['name'];
  
    $designation = $_POST['designation'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $qual = $_POST['qualification'];
    $new_image = $_FILES['image']['name'];
    $path = "../uploads/commerce_faculty";
    $old_image = $_POST['old_image'];
    if ($new_image != null) {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;

    } else {
        $update_filename = $old_image;
    }
    $update_query = "update commerce set name='$name',designation='$designation',date='$date',qualification='$qual',image='$update_filename' where id='$id'";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image']['name'] != null) {
            $update_file = "../uploads/commerce_faculty" . $old_image;
            if (file_exists($update_file)) {
                unlink($update_file);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            echo "<script>if(confirm('Record is Updated. ')){document.location.href='../commerce-faculty'};</script>";

        }
    } else {
        echo "<script>if(confirm('Record is Updated. ')){document.location.href='../commerce-faculty'};</script>";
    }
} else if (isset($_POST['delete_faculty_btn_commerce'])) {
    $faculty_id = mysqli_real_escape_string($con, $_POST['faculty_id']);

    $category_query = "SELECT * from commerce where id='$faculty_id'";
    $category_query_run = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);

    $image = $category_data['image'];
    $delete_query = "DELETE from commerce where id='$faculty_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {
        echo "<script>if(confirm('Your Record Delete Sucessfully. ')){document.location.href='../commerce-faculty'};</script>";

        if (file_exists("../uploads/commerce_faculty" . $old_image)) {
            unlink("../uploads/commerce_faculty" . $old_image);
        }

    }
}
else if (isset($_POST['add-faculty-competative'])) {
    $name = $_POST['name'];
   
    $designation = $_POST['designation'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $qual = $_POST['qualification'];
    $image = $_FILES['image']['name'];
    $path = "../uploads/competative_faculty";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $query = "insert into competative (name,designation,date,qualification,image)
    values ('$name','$designation','$date','$qual','$filename')";


    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='../competative-faculty'}else{document.location.href='add-faculty'};</script>";

    } else {
        echo "Not Uploades ";
    }
} else if (isset($_POST['update-faculty-competative'])) {
    $id = $_POST['faculty_id'];
    $name = $_POST['name'];
  
    $designation = $_POST['designation'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $qual = $_POST['qualification'];
    $new_image = $_FILES['image']['name'];
    $path = "../uploads/competative_faculty";
    $old_image = $_POST['old_image'];
    if ($new_image != null) {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;

    } else {
        $update_filename = $old_image;
    }
    $update_query = "update competative set name='$name',designation='$designation',date='$date',qualification='$qual',image='$update_filename' where id='$id'";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image']['name'] != null) {
            $update_file = "../uploads/competative_faculty" . $old_image;
            if (file_exists($update_file)) {
                unlink($update_file);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            echo "<script>if(confirm('Record is Updated. ')){document.location.href='../competative-faculty'};</script>";

        }
    } else {
        echo "<script>if(confirm('Record is Updated. ')){document.location.href='../competative-faculty'};</script>";
    }
} else if (isset($_POST['delete_faculty_btn_competative'])) {
    $faculty_id = mysqli_real_escape_string($con, $_POST['faculty_id']);

    $category_query = "SELECT * from competative where id='$faculty_id'";
    $category_query_run = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);

    $image = $category_data['image'];
    $delete_query = "DELETE from competative where id='$faculty_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {
        echo "<script>if(confirm('Your Record Delete Sucessfully. ')){document.location.href='../competative-faculty'};</script>";

        if (file_exists("../uploads/competative_faculty" . $old_image)) {
            unlink("../uploads/competative_faculty" . $old_image);
        }

    }
}
 else if (isset($_POST['export_data1'])) {
    $sql_query = "SELECT * from addmission";
    $resultset = mysqli_query($con, $sql_query);
    $developer_records = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $developer_records[] = $rows;
    }

    $filename = "addmission_excel" . date('Ymd') . ".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if (!empty($developer_records)) {
        foreach ($developer_records as $record) {
            if (!$show_coloumn) {
                // display field/column names in first row
                echo implode("\t", array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";

            exit;
        }

    }
}
else if (isset($_POST['export_data'])) {
    $sql_query = "SELECT * from contact_us";
    $resultset = mysqli_query($con, $sql_query);
    $developer_records = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $developer_records[] = $rows;
    }

    $filename = "enquries_excel" . date('Ymd') . ".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if (!empty($developer_records)) {
        foreach ($developer_records as $record) {
            if (!$show_coloumn) {
                // display field/column names in first row
                echo implode("\t", array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";

            exit;
        }

    }
}
else if (isset($_POST['export_data2'])) {
    $sql_query = "SELECT * from science_feedback";
    $resultset = mysqli_query($con, $sql_query);
    $developer_records = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $developer_records[] = $rows;
    }

    $filename = "enquries_excel" . date('Ymd') . ".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if (!empty($developer_records)) {
        foreach ($developer_records as $record) {
            if (!$show_coloumn) {
                // display field/column names in first row
                echo implode("\t", array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";

            exit;
        }

    }
}
else if (isset($_POST['export_data3'])) {
    $sql_query = "SELECT * from commerce_feedback";
    $resultset = mysqli_query($con, $sql_query);
    $developer_records = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $developer_records[] = $rows;
    }

    $filename = "enquries_excel" . date('Ymd') . ".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if (!empty($developer_records)) {
        foreach ($developer_records as $record) {
            if (!$show_coloumn) {
                // display field/column names in first row
                echo implode("\t", array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";

            exit;
        }

    }
}
else if (isset($_POST['image1'])) {
    $image=$_FILES['image1']['name'];
    $old_image=$_POST['old_image']['name'];
    $path = "../uploads/slider";


    $image_ext=pathinfo($image,PATHINFO_EXTENSION);

    $update_filename=time().'.'.$image_ext;
    if ($image != null) {
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;

    } else {
        $update_filename = $old_image;
    }
    $update_query = "update slider set image='$update_filename' where id=1";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image1']['name'] != null) {
            $update_file = "../uploads/slider" . $old_image;
            if (file_exists($update_file)) {
                unlink($update_file);
            }
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename);
            echo "<script>if(confirm('Image is Updated. ')){document.location.href=''};</script>";

        }
    } else {
        echo "<script>if(confirm('Image not is Updated. ')){document.location.href='../slider'};</script>";
    }
    
}
else if (isset($_POST['image2'])) {
    $image=$_FILES['image2']['name'];
    $old_image=$_POST['old_image']['name'];
    $path = "../uploads/slider";

    $image_ext=pathinfo($image,PATHINFO_EXTENSION);

    $update_filename=time().'.'.$image_ext;
    if ($image != null) {
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;

    } else {
        $update_filename = $old_image;
    }
    $update_query = "update slider set image='$update_filename' where id=2";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image2']['name'] != null) {
            $update_file = "../uploads/slider" . $old_image;
            if (file_exists($update_file)) {
                unlink($update_file);
            }
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename);
            echo "<script>if(confirm('Image  is Updated. ')){document.location.href='../slider'};</script>";

        }
    } else {
        echo "<script>if(confirm('Image not is Updated. ')){document.location.href='../slider'};</script>";
    }
    
}
else if (isset($_POST['image3'])) {
    $image=$_FILES['image3']['name'];
    $old_image=$_POST['old_image']['name'];
    $path = "../uploads/slider";

    $image_ext=pathinfo($image,PATHINFO_EXTENSION);

    $update_filename=time().'.'.$image_ext;
    if ($image != null) {
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;

    } else {
        $update_filename = $old_image;
    }
    $update_query = "update slider set image='$update_filename' where id=3";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image3']['name'] != null) {
            $update_file = "../uploads/slider" . $old_image;
            if (file_exists($update_file)) {
                unlink($update_file);
            }
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename);
            echo "<script>if(confirm('Image  is Updated. ')){document.location.href='../slider'};</script>";

        }
    } else {
        echo "<script>if(confirm('Image  is not Updated. ')){document.location.href='../slider'};</script>";
    }
    
}
else if(isset($_POST['btn_contact']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="insert into contact_us (name,email,phone,subject,message) values ('$name','$email','$phone','$subject','$message')";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        echo "<script>if(confirm('Thank You For Enquery. ')){document.location.href='../../contact'};</script>";
    }

}
elseif(isset($_POST['btn_addmission']))
{
    $name=$_POST['fname'];
    $pres=$_POST['previousschool'];
    $address=$_POST['address'];
    $taluka=$_POST['taluka'];
    $district=$_POST['district'];
    $branch=$_POST['branch'];
    $sphone=$_POST['studentphone'];
    $pphone=$_POST['parentphone'];
    $category=$_POST['category'];
    $ssc=$_POST['sscboard'];
    $pname=$_POST['pname'];
    $occ=$_POST['occupation'];
    $hostel=$_POST['hostel'];
    $query="insert into addmission (fname,previousschool,address,taluka,district,branch,studentphone,parentphone,category,sscboard,pname,occupation,hostel) values ('$name','$pres','$address','$taluka','$district','$branch','$sphone','$pphone','$category','$ssc','$pname','$occ','$hostel')";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        echo "<script>if(confirm('Thank You For Applying. ')){document.location.href='../../bridgeRegistration'};</script>";
    }


}
elseif(isset($_POST['notice']))
{
    $notice=$_POST['notice_des'];
    $query="UPDATE notice set description='$notice' where notice.id=1";
    $query_run=mysqli_query($con,$query);
    if($query_run)
{
    echo "<script>if(confirm('Updated Successfully. ')){document.location.href='../notice'};</script>";
}
}
else if (isset($_POST['export_data4'])) {
    $sql_query = "SELECT * from science_feedback11";
    $resultset = mysqli_query($con, $sql_query);
    $developer_records = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $developer_records[] = $rows;
    }

    $filename = "enquries_excel" . date('Ymd') . ".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if (!empty($developer_records)) {
        foreach ($developer_records as $record) {
            if (!$show_coloumn) {
                // display field/column names in first row
                echo implode("\t", array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";

            exit;
        }

    }
}

else if (isset($_POST['export_data5'])) {
    $sql_query = "SELECT * from commerce_feedback11";
    $resultset = mysqli_query($con, $sql_query);
    $developer_records = array();
    while ($rows = mysqli_fetch_assoc($resultset)) {
        $developer_records[] = $rows;
    }

    $filename = "enquries_excel" . date('Ymd') . ".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if (!empty($developer_records)) {
        foreach ($developer_records as $record) {
            if (!$show_coloumn) {
                // display field/column names in first row
                echo implode("\t", array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";

            exit;
        }

    }
}
else if(isset($_POST['btn_feedback']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $stream=$_POST['stream'];
    $class=$_POST['class'];
    $feedback=$_POST['feedbackcampus'];
    $aboutcoll=$_POST['aboutcollege'];
    $suggestions=$_POST['suggestions'];

    $query="insert into science_feedback (name,phone,stream,class,feedbackcampus,aboutcollege,suggestions) values ('$name','$phone','$stream','$class','$feedback','$aboutcoll','$suggestions')";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        echo "<script>if(confirm('Thank You For Feedback. ')){document.location.href='../../student_feedback.html'};</script>";
    }

}



?>