<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="col-lg-6 m-auto ">
        <br><br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class='card'>
                <div class="card-header bg-dark">
                    <h1 class='text-white text-center'>inset operation</h1>
                </div>
                <label>title</label>
                <input type="text" name="title" placeholder=" Enter your Title" class="form-control"><br>
                <label>description</label>
                <input type="text" name="description" placeholder=" Enter your description" class="form-control"><br>
                <label>price</label>
                <input type="number" name="price" placeholder=" Enter your price" class="form-control"><br>
                <div>
                    <label for="file">Food photo</label>
                    <input type="file" name="file" id="file" class="form-control"><br>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-success">

            </div>
        </form>


    </div>
</body>

</html>