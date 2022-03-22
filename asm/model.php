<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model</title>
    <link rel="stylesheet" href="./css/model.css">
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
                        <div class="row-padding margin-top">
                            <div class="row-padding margin-top">
                            <?php
                            $sql1 = "SELECT * FROM car";
                            $rst1 = querySQL($sql1);
                            while ($car = mysqli_fetch_array($rst1)) { ?>
                                <div class="col-third">
                                    <div class="card">
                                        <a href="car_detail.php?CarID=<?= $car['car_id'] ?>">
                                        <img src="images\cars\<?= $car['car_image']?>" alt="" style="width: 100%; height: 250px">
                                            <div class="container">
                                                <h3 style="font-size: 15px;"><?= $car['car_name'] ?></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="clear"></div>
                            </div>
                        </div>
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