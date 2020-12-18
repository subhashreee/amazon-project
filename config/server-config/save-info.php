<?php
if (isset($_POST['save_info']) && isset($_SESSION['reg'])) {

    $reg=$_SESSION['reg'];
    $info=trim($_POST['info']);

    $query = "INSERT INTO bloginfo(regno, info) VALUES ('$reg','$info');";
    $result = mysqli_query($db, $query);

    if($result){
        header('location: ../homepage.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}
?>
