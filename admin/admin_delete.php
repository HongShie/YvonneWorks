<?php
if (isset($_GET['id'])) {
include("../php/connection.php");
$id = $_GET['id'];
$sql = "DELETE FROM artworks WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Art Deleted Successfully!";
    header("Location:admin_home.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Art does not exist";
}
?>