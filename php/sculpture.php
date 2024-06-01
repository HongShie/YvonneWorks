<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/sculpture.css">
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
      <nav class="navbar navbar-expand-xl rounded mb-lg-4 mb-2 sticky-top bg-white">
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
                  <a href="../php/sculpture.php" class="btn gradient-bg-1 text-white rounded-pill px-5 mx-2 py-2">Craft</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="align-items-lg-center pt-3">
                  <a href="../html/about.html" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">About</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div class="align-items-lg-center pt-3">
                  <a href="../php/commission.php" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">Commission</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="d-flex flex-wrap w-100 h-100 px-lg-4 px-3 my-lg-4 my-3">
        <table class="w-100">
          <tbody class="d-flex flex-wrap justify-content-between w-100">
            <?php
                include('connection.php');
                $sqlSelect = "SELECT * FROM sculptures";
                $result = mysqli_query($conn,$sqlSelect);
                while($data = mysqli_fetch_array($result)){
                ?>
              <tr class="halfhalf">
                <td style="
                display: flex;
                width: 100%;
                height: 60vh;">
                <div class="w-100 shadow border border-1 border-secondary-subtle rounded-5 px-4 py-4 my-2">
                  <div id="artdescription" class="d-flex justify-content-start align-items-center">
                    <span class="fw-medium"><?php echo $data['category'] ?></span>
                  </div>
                  <div id="artname" class="d-flex flex-nowrap justify-content-between">
                      <h2 class="fw-bold d-flex align-items-center"><?php echo $data['name'] ?></h2>
                      <div class="h-100 d-flex justify-content-center align-items-center">
                        <div id="art-btn" class=" d-flex justify-content-center align-items-center color11 rounded-circle">
                          <img src="../img/icon/arrow-small-up.png" alt="arrow-small-up" width="75%" height="75%" >
                        </div>
                      </div>
                  </div>
                  <div id="artthumbnail" class="d-flex justify-content-center mb-lg-3 mb-0 pb-lg-0">
                    <img src="<?php echo $data['sculpturelink'] ?>" alt="<?php echo $data['name'] ?>" width="100%" class="object-fit-cover rounded-4">
                  </div>
                </div>
                </td>
              </tr>
              <!-- <tr class="halfhalf">
                <td style="
                display: flex;
                width: 100%;
                height: 60vh;">
                <div class="w-100 border border-1 border-secondary-subtle rounded-5 px-4 py-4">
                  <div id="artdescription" class="d-flex justify-content-start align-items-center">
                    <span class="fw-medium"><?php echo $data['category'] ?></span>
                  </div>
                  <div id="artname" class="d-flex flex-nowrap justify-content-between">
                      <h2 class="fw-bold d-flex align-items-center"><?php echo $data['name'] ?></h2>
                      <div class="h-100 d-flex justify-content-center align-items-center">
                        <div id="art-btn" class=" d-flex justify-content-center align-items-center color11 rounded-circle">
                          <img src="../img/icon/arrow-small-up.png" alt="arrow-small-up" width="75%" height="75%" >
                        </div>
                      </div>
                  </div>
                  <div id="artthumbnail" class="d-flex justify-content-center mb-lg-3 mb-0 pb-lg-0">
                    <img src="<?php echo $data['artlink'] ?>" alt="<?php echo $data['name'] ?>" width="100%" class="object-fit-cover rounded-5">
                  </div>
                </div>
                </td>
              </tr> -->
              <?php
                }
                ?>
          </tbody>
        </table>
      </div>

      
    </body>
</html>