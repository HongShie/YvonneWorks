<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Exercise</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Exercise</h1>
            <div>
            <a href="admin_home.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="admin_process.php" enctype="multipart/form-data" method="post">

            <?php 
            if (isset($_GET['id'])) {
                include("../php/connection.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM artworks WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            ?>


            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="name" placeholder="Name: " value="<?php echo $row["name"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="overview" placeholder="Description: " value="<?php echo $row["overview"]; ?>">
            </div>
            <div class="form-elemnt my-4">
            <input type="file"  class="form-control m-auto" name="artlink">

            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Book" class="btn btn-primary">
            </div>


            <?php
            }else{
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>
           
        </form>
    </div>
</body>
</html>