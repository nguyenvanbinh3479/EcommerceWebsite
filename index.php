<?php
/**
 * Created by PhpStorm.
 * User: BINH-PC
 * Date: 2019/1/12
 * Time: 9:30
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/admin.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
<!--    <script src="js/disable-copy.js"></script>-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/index.js"></script>-->
    <title>VirusS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <a class="navbar-brand" href="index.php">VirusS Store Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Men
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Shirts</a>
                        <a class="dropdown-item" href="#">Pants</a>
                        <a class="dropdown-item" href="#">Shoes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Accessories</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="background-image">
        <div id="image-1"><img src="images/bb.jpg" alt="" srcset=""></div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8 ">
            <h2 class="text-center">Featured Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/admin.png" id="image" width="150" height="150">
                    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Out Price: $19.99</p>
                    <button type="submit" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center bg-secondary" id="footer">&copy; Copyright 2019 VirusS Store Shop</footer>
    <?php
        include 'jeans.php';
        $dbc = mysqli_connect("localhost", "root", "", "examplephpmysql");
        $query = "SELECT * FROM admin";
        $resul = mysqli_query($dbc,$query);
        $arr = mysqli_fetch_array($resul);
        foreach($arr as $value){
            echo $value . "<br/>";
        }
    ?>
</body>
</html>
