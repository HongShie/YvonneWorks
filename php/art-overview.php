<?php 
session_start();
if (isset($_GET['id'])) {
    include("connection.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM artworks WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    while($data = mysqli_fetch_array($result)){
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/art-overview.css">
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
      <nav class="navbar navbar-expand-xl static-top bg-transparent">
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
                  <a href="../php/commission.php" class="btn btn-outline-dark border-secondary-subtle rounded-pill px-5 mx-2 py-2">Commission</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="art_title d-flex flex-nowrap justify-content-between align-items-center px-lg-4 px-3 mb-lg-4 mb-1 mt-4">
        <div class="twoperthree d-flex justify-content-start align-items-center">
          <p class="display-1 fw-bold">
            <?php echo $data['name']?>
          </p>
        </div>
        <div class="oneperthree d-flex justify-content-end align-items-center">
          <button type="button" class="btn btn-success rounded-pill px-3 py-2">
            Inquire
          </button>
        </div>
      </div>

      <!-- <div class="feature_row d-flex justify-content-center rounded-5 object-fit-contain px-lg-4 px-3 mt-4">
        <img src="<?php echo $data['artlink']?>" class="rounded-circle">
      </div> -->

      <!-- <div id="firstrow" class="feature_row justify-content-between">
        <div class="feature_row d-flex flex-wrap align-items-end px-lg-5 px-4" style="
        background-image: url('<?php echo $data['artlink']?>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;">
        </div>
      </div> -->

      <div id="firstrow" class="feature_row justify-content-between">
        <div id="carouselExampleSlidesOnly" class="carousel slide feature_row d-flex flex-wrap text-center px-lg-5 px-4" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active w-100 h-100" data-bs-interval="2500">
              <div class="feature_row d-flex flex-wrap align-items-end px-lg-5 px-4" style="
              background-image: url('<?php echo $data['artlink']?>');
              background-repeat: no-repeat;
              background-position: center;
              background-size: contain;">
              </div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="2500">
              <div class="feature_row d-flex flex-wrap align-items-end px-lg-5 px-4" style="
              background-image: url('<?php echo $data['artpv1']?>');
              background-repeat: no-repeat;
              background-position: center;
              background-size: contain;">
              </div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="2500">
              <div class="feature_row d-flex flex-wrap align-items-end px-lg-5 px-4" style="
              background-image: url('<?php echo $data['artpv2']?>');
              background-repeat: no-repeat;
              background-position: center;
              background-size: contain;">
              </div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="2500">
              <div class="feature_row d-flex flex-wrap align-items-end px-lg-5 px-4" style="
              background-image: url('<?php echo $data['artpv3']?>');
              background-repeat: no-repeat;
              background-position: center;
              background-size: contain;">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div id="firstrow" class="one_row justify-content-between px-lg-4 px-3 mb-lg-4 mt-lg-5 mt-3">
        <div class="oneperthree d-flex flex-column border border-1 border-secondary-subtle rounded-5 px-5 py-5">
          <div class="flex-grow-1 d-flex flex-column">
            <p class="d-flex justify-content-start align-items-end fw-medium text-secondary h-auto">Year</p>
            <p class="fs-2 fw-semibold h-75"><?php echo $data['year']?></p>
          </div>
          <div class="flex-grow-1 d-flex flex-column">
            <p class="d-flex justify-content-start align-items-end fw-medium text-secondary h-auto">Dimension</p>
            <p class="fs-2 fw-semibold h-75"><?php echo $data['dimensions']?></p>
          </div>
          <div class="flex-grow-1 d-flex flex-column">
            <p class="d-flex justify-content-start align-items-end fw-medium text-secondary h-auto">Price</p>
            <p class="fs-2 fw-semibold h-75"><?php echo $data['price']?></p>
          </div>
        </div>
        <div class="twoperthree d-flex flex-column border border-1 border-secondary-subtle rounded-5 mt-lg-0 mt-3 px-5 py-5">
          <div class="flex-grow-1 d-flex flex-column ">
            <p class="d-flex justify-content-start align-items-start fw-medium text-secondary h-auto">Artist Masterpiece Overview</p>
            <p class="d-flex justify-content-start align-items-start fs-2 fw-semibold h-75"><?php echo $data['overview']?></p>
          </div>
        </div>
      </div>

    </body>
</html>

<?php
  }}
?>