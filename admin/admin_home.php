<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Admin Page</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:center;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Admin Page</h1>
            <div>
                <a href="admin_create.php" class="btn btn-primary">Add New Artpieces</a>
            </div>
            <div>
                <a href="logout.php" class="btn btn-danger">Log out</a>
            </div>
        </header>
        <?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-bordered caption-top w-auto">
            <caption>List of Artpieces</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Dimensions</th>
                    <th>Price</th>
                    <th>Overview</th>
                    <th>Artpieces</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include('../php/connection.php');
            $sqlSelect = "SELECT * FROM artworks";
            $result = mysqli_query($conn,$sqlSelect);
            while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['category']; ?></td>
                    <td><?php echo $data['year']; ?></td>
                    <td><?php echo $data['dimensions']; ?></td>
                    <td><?php echo $data['price']; ?></td>
                    <td><?php echo $data['overview']; ?></td>
                    <td><img src="<?php echo $data['artlink']; ?>" class="w-100"></td>
                    <td>
                        <a href="admin_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning mb-1">Edit</a>
                        <a href="admin_delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>