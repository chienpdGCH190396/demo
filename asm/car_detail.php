<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car</title>
    <link rel="stylesheet" href="./css/car_detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="./images/img/logo.png"/>
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <div id="navbar">
            <ul id="nav">
                <li><a href="./landing.php">Home</a></li>
                <li><a href="./model.php">Models</a></li>
                <li><a href="./landing.php#Contact">Contact</a></li> 
                <li><a href="./index.php">Sign In</a></li>        
            </ul>
        </div>
        
        <!-- Content -->
        <div id="content">
            <div class="wrap">
                <div class="margin-lr-12px content-section">
                    <div class="width-25 padding-lr12px">
                        <div class="sidebar">
                            <h3>Models</h3>
                                <ul>
                                    <?php
                                        include_once ('functions.php');
                                        $sql = "SELECT * FROM model";
                                        $result = querySQL($sql);
                                        while ($cmd = mysqli_fetch_array($result)) { ?>
                                        <li><a href="model_detail.php?ModelID=<?= $cmd['model_id'] ?>"><?= $cmd['model_name'] ?></a></li>
                                    <?php } ?>
                                </ul>
                        </div>
                    </div>

                <div class="width-75 padding-lr12px">
                    <div class="margin-lr-12px">
                        <?php
                        if (isset($_GET['CarID'])) {
                        $CarID = $_GET['CarID'];
                        $sql1 = "SELECT * FROM car WHERE car_id = '$CarID'";
                        $rst1 = querySQL($sql1);
                        while ($car = mysqli_fetch_array($rst1)) { ?>
                        <div class="row-padding margin-top">
                            <h1><?= $car['car_name'] ?></h1>
                            <hr>
                             <img src="images\cars\<?= $car['car_image']?>" alt="" style="width: 500px; height: 300px;">
                            <h3>Name: <?= $car['car_name'] ?></h3>
                            <?php
                            $cmd = $car['car_model'];
                            $sql2 = "SELECT model_name FROM model WHERE model_id = '$cmd'";
                            $rst2 = querySQL($sql2);
                            $model = mysqli_fetch_array($rst2); ?>
                            <h3>Model: <?= $model[0] ?></h3>
                            <h3>Price: <?= $car['car_price'] ?>$</h3>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                    <div class="clear"></div>
            </div>
        </div>

        <!-- Footer -->
        <div id="footer">
            <div class="i-sc">
                <i class="fa fa-facebook-official hover-opacity"></i>
                <i class="fa fa-instagram hover-opacity"></i>
                <i class="fa fa-snapchat hover-opacity"></i>
                <i class="fa fa-pinterest-p hover-opacity"></i>
                <i class="fa fa-twitter hover-opacity"></i>
                <i class="fa fa-linkedin hover-opacity"></i>
            </div>
            <p class="powered">Powered by Pham Duc Chien </p>
        </div>
    </div>
</body>
</html>
<?php } ?>