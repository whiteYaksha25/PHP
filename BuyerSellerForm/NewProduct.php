<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Add Product!</h1>
    <form method="post" action="NewProduct.php">
        <div class="form-group">
            <label for="exampleInput">Product ID</label>
            <input name="e1" type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInput">Product Name</label>
            <input name="n1" type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInput">Product Description</label>
            <input name="f1" type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp">

        <div class="form-group">
            <label for="exampleInputQnty">Product Quantity</label>
            <input name="p1" type="number" class="form-control" id="exampleInputQnty">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
require "DBcon.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset(
        $_POST['e1'],
        $_POST['n1'],
        $_POST['f1'],
        $_POST['p1']
    )) {
        $ue = $_POST['e1'];
        $un = $_POST['n1'];
        $uf = $_POST['f1'];
        $up = $_POST['p1'];

        $qur = "insert into `product` values 
            ('$ue','$un','$uf','$up')";
        $exc = mysqli_query($con, $qur);
        if ($exc) {
            echo "
                    <script>
                        alert('Reg Successful.');
                        window.location.href='IncReq.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Reg Not Successful!!!');
                    </script>
                ";
        }
    }
}
?>