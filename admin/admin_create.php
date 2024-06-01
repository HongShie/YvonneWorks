<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Exercise</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Exercise</h1>
            <div>
            <a href="admin_home.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="admin_process.php" method="post" enctype="multipart/form-data">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="name" placeholder="Name : ">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="category" placeholder="Category : ">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="year" placeholder="Year : ">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="dimensions" placeholder="Dimension : ">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="price" placeholder="Price : ">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="overview" placeholder="Overview : ">
            </div>
            <div class="form-element my-4">
                <label for="floatingPassword" class="fw-medium">Main Image : </label>
                <input type="file" name="MainImage" id="MainImage">
            </div>
            <div class="form-element my-4">
                <label for="floatingPassword" class="fw-medium">Img Preview 1 : </label>
                <input type="file" name="ImgPreview1" id="ImgPreview1" placeholder="Img preview 1">
            </div>
            <div class="form-element my-4">
                <label for="floatingPassword" class="fw-medium">Img Preview 2 : </label>
                <input type="file" name="ImgPreview2" id="ImgPreview2">
            </div>
            <div class="form-element my-4">
                <label for="floatingPassword" class="fw-medium">Img Preview 3 : </label>
                <input type="file" name="ImgPreview3" id="ImgPreview3">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Art" class="btn btn-primary">
            </div>
        </form> 
    </div>
</body>
</html>