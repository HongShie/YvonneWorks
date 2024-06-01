<?php 
include('connection.php');
session_start();
isset($_SESSION['user'], $_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/commission.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" href="/img/logo/yvonnes-art-website-favicon-color.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <title>
            YvonneWorks
        </title>
    </head>
    <body class="montserrat px-lg-5 px-3 w-100">
      <nav class="navbar navbar-expand-xl default bg-transparent">
        <div class="container-fluid">
          <img src="../img/logo/yvonnes-art-high-resolution-logo-black-on-transparent-background.png" alt="logo" class="navbar-brand col-lg-2 col-3 ps-lg-4 pt-4 ">
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse d-xl-flex collapse" id="navbarsExample11">
          <ul class="navbar-nav col-lg-10 d-flex justify-content-lg-center ">
            <li class="nav-item">
                <div class="align-items-lg-center pt-3">
                  <a href="../index.html" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">Home</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="align-items-lg-center pt-3">
                  <a href="../php/art.php" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">Art</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="align-items-lg-center pt-3">
                  <a href="../php/sculpture.php" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">Craft</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="align-items-lg-center pt-3">
                  <a href="../html/about.html" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">About</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div class="align-items-lg-center pt-3">
                  <a href="#" class="btn gradient-bg-1 text-white rounded-pill px-5 mx-2 py-2">Commission</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div 
        <?php if (isset($_SESSION['user'])) echo " style='display: none !important';"; ?> 
        class="alert alert-danger w-100 rounded-5 fw-semibold px-lg-4 px-3 my-lg-4 my-3" role="alert">
        OOPS! It seems that you haven't  <a href="login.php" class="alert-link fw-bold">logged in</a>  yet
      </div>

      <div 
      <?php if (!isset($_SESSION['user'])) echo " style='display: none !important';"; ?> 
      class="art_title d-flex flex-wrap justify-content-between align-items-center px-lg-4 px-3 my-lg-4 my-3">
        <div class="twoperthree d-flex justify-content-start align-items-center">
          <p class="display-3 fw-bold">
            <?php echo $_SESSION['user'] ?>
          </p>
        </div>
        <div class="oneperthree d-flex justify-content-end align-items-center">
          <a href="" class="btn btn-success rounded-pill px-3 me-3 py-2" role="button">
            Add Request
          </a>
          <a href="../php/edit_profile.php" class="btn btn-warning text-white rounded-pill px-3 me-3 py-2" role="button">
            Edit Profile
          </a>
          <a href="../php/logout.php" class="btn btn-danger rounded-pill px-3 py-2" role="button">
            Log Out
          </a>
        </div>
        <table class="table table-bordered table-responsive caption-top w-auto">
          <caption>Current Request</caption>
          <thead>
            <tr>
              <th class="px-3">#</th>
              <th class="px-5">Title</th>
              <th class="px-4">Type</th>
              <th class="px-5">Status</th>
              <th class="px-5">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $userid = $_SESSION['id'];
          $sqlSelect = "SELECT * FROM commission WHERE user = $userid";
          $result = mysqli_query($conn,$sqlSelect);
          while($data = mysqli_fetch_array($result)){
          ?>
          <tr>
            <td class="text-center"><?php echo $data['id']; ?></td>
            <td class="text-center"><?php echo $data['title']; ?></td>
            <td class="text-center"><?php echo $data['type']; ?></td>
            <td class="text-center"><?php echo $data['status']; ?></td>
            <td class="text-center">
              <a href="admin_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-danger mb-1">Cancel</a>
              <!-- <a href="admin_delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a> -->
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

<?php
?>