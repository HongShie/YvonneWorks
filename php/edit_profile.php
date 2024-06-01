<?php 
include('connection.php');
session_start();
$username = $_SESSION['user'];
$sqlSelect = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($conn,$sqlSelect);
while($data = mysqli_fetch_array($result)){
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
                  <a href="../php/commission.php" class="btn gradient-bg-1 text-white rounded-pill px-5 mx-2 py-2">Commission</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="modal modal-sheet position-static d-block p-2 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-semibold mb-0 fs-2">Edit Profile</h1>
            </div>
            <div class="modal-body p-5 pt-0">
            <!-- <?php
              if (isset($_POST["submit"])) {

                $username = $_POST["username"];
                $email = $_POST["username"];
                $password = $_POST["password"];

                $errors = array();

                require_once "connection.php";

                $sqlCheckUsername = "SELECT * FROM user WHERE username = '$username'";
                $resultUsername = mysqli_query($conn, $sqlCheckUsername);
                $userViaUsername = mysqli_fetch_array($resultUsername, MYSQLI_ASSOC);
                if ($userViaUsername) {
                  if ($pass === $user["password"]) {
                      session_start();
                      $_SESSION["user"] = $userViaUsername["username"];
                      header("Location: commission.php");
                      die();
                  }else{
                      echo "<div class='alert alert-danger'>Password does not match</div>";
                      echo "Input :";
                      echo $pass;
                      echo "Server :";
                      echo $user["password"];
                  }
                }else{
                    echo "<div class='alert alert-danger'>Username does not match</div>";
                }

                $sqlCheckEmail = "SELECT * FROM user WHERE emailaddress = '$email'";
                $resultEmail = mysqli_query($conn, $sqlCheckEmail);
                $userViaEmail = mysqli_fetch_array($resultEmail, MYSQLI_ASSOC);
                if ($userViaEmail) {
                    if ($pass === $user["password"]) {
                        session_start();
                        $_SESSION["user"] = $userViaEmail["username"];
                        header("Location: commission.php");
                        die();
                    }else{
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                        echo "Input :";
                        echo $pass;
                        echo "Server :";
                        echo $user["password"];
                    }
                }else{
                    echo "<div class='alert alert-danger'>Username does not match</div>";
                }
              }
            ?> -->

              <form action="" method="post">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3 fw-semibold" id="floatingInput" placeholder="username" name="username" value="<?php echo $data["username"]; ?>">
                  <label for="floatingInput" class="fw-medium">Change username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="password" name="password" >
                  <label for="floatingPassword" class="fw-medium">Change password</label>
                </div>
                <input type="submit" class="w-100 mb-4 btn btn-lg rounded-3 btn-warning text-white fw-semibold" value="Edit" name="submit">
              </form>
            </div>
          </div>
        </div>
      </div>


    </body>
</html>

<?php
}
?>