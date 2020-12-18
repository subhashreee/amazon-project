<?php
if (isset($_POST['edit_user']) && isset($_SESSION['reg'])) {

    $reg=$_SESSION['reg'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $dept = $_POST['dept'];

    $query = "UPDATE user SET name='$name', email='$email', year='$year', dept='$dept' WHERE regno='$reg';";
    $result = mysqli_query($db, $query);
    if($result){
        header('location: ../profile.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}
 ?>
