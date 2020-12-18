<?php

if (isset($_POST['upload_note']) && isset($_SESSION['reg']))
{
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES['file_name']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        echo "<script>alert('File already exists!')</script>";
        $uploadOk = 0;
    }

    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "pdf" && $fileType != "docx" && $fileType != 'txt') {
        echo "<script>alert('Invalid File type!')</script>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<script>alert('Error Uploading file!')</script>";
    }
    else {
        if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_file)) {
            echo "<script>alert('File uploaded successfully!')</script>";
            header('location: ../homepage.php');
        }
        else {
            echo "<script>alert('".$_FILES['file_name']['error']."')</script>";
        }
    }
}
?>
