<?php
include('../php/connection.php');
if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $year = mysqli_real_escape_string($conn, (int)$_POST["year"]);
    $dimensions = mysqli_real_escape_string($conn, $_POST["dimensions"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $overview = mysqli_real_escape_string($conn, $_POST["overview"]);

    // File Upload
    $target_dir = "../img/art/";
    $target_file = $target_dir . basename($_FILES["MainImage"]["name"]);
    $uploadOk = 1;
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["MainImage"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["MainImage"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }

    // File Upload for mockup img
    $target_dir_pv1 = "../img/art/mockup/";
    $target_file_pv1 = $target_dir_pv1 . basename($_FILES["ImgPreview1"]["name"]);
    $uploadOk = 1;
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["ImgPreview1"]["tmp_name"], $target_file_pv1)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["ImgPreview1"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }

    // File Upload for mockup img
    $target_dir_pv2 = "../img/art/mockup/";
    $target_file_pv2 = $target_dir_pv2 . basename($_FILES["ImgPreview2"]["name"]);
    $uploadOk = 1;
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["ImgPreview2"]["tmp_name"], $target_file_pv2)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["ImgPreview2"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }

    // File Upload for mockup img
    $target_dir_pv3 = "../img/art/mockup/";
    $target_file_pv3 = $target_dir_pv3 . basename($_FILES["ImgPreview3"]["name"]);
    $uploadOk = 1;
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["ImgPreview3"]["tmp_name"], $target_file_pv3)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["ImgPreview3"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }


    $sqlInsert = "INSERT INTO artworks(name, category, year, dimensions, price, overview, artlink, artpv1, artpv2, artpv3) VALUES ('$name','$category','$year','$dimensions','$price','$overview','$target_file','$target_file_pv1','$target_file_pv2','$target_file_pv3')";
    if(mysqli_query($conn,$sqlInsert)){
        $_SESSION["create"] = "New Art Added Successfully!";
        echo "<script> window.location.href = 'admin_home.php';</script>";
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $year = mysqli_real_escape_string($conn, (int)$_POST["year"]);
    $dimensions = mysqli_real_escape_string($conn, $_POST["dimensions"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $overview = mysqli_real_escape_string($conn, $_POST["overview"]);



    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE artworks SET name = '$name', overview = '$overview', link = '$link' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Art Updated Successfully!";
        header("Location:admin_home.php");
    }else{
        die("Something went wrong");
    }
}
?>