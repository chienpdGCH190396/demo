<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamborghini</title>
    <link rel="stylesheet" href="./css/index.css">
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
                <li><a href="#Contact">Contact</a></li> 
                <li><a href="./index.php">Sign In</a></li>         
            </ul>
        </div>

        <!-- Header -->
        <div id="header">
            <video class="header-vid" src="./video/video.mp4" autoplay muted loop></video>
        </div>

        <!-- Content -->
        <div id="Content">
            <div class="content-section">
                <h2 class="section-heading">Outstanding Lamborghini cars</h2>
                <div class="cars-list">
                    <div class="row-padding margin-tb">
                        <div class="car-item">
                            <img src="./images/img/car1.jpg" alt="" class="car-img">
                            <p class="car-name">Lamborghini AVENTADOR SVJ</p>
                        </div>
    
                        <div class="car-item">
                            <img src="./images/img/car2.jpg" alt="" class="car-img">
                            <p class="car-name">Lamborghini HUCANO EVO</p>
                        </div>
    
                        <div class="car-item">
                            <img src="./images/img/car3.jpg" alt="" class="car-img">
                            <p class="car-name">Lamborghini URUS</p>
                        </div>
                            
                        <div class="clear"></div>
                    </div>
                        
                    <div class="row-padding margin-tb">
                        <div class="car-item">
                            <img src="./images/img/car4.jpg" alt="" class="car-img">
                            <p class="car-name">Lamborghini SIÁN FKP 37</p>
                        </div>
        
                        <div class="car-item">
                            <img src="./images/img/car5.jpg" alt="" class="car-img">
                            <p class="car-name">Lamborghini TERZO MILLENNIO</p>
                        </div>
        
                        <div class="car-item">
                            <img src="./images/img/car6.jfif" alt="" class="car-img">
                            <p class="car-name">Lamborghini ESTOQUE</p>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <!-- Contact  -->
        <div id="Contact">
            <h2 class="wide center">CONTACT</h2>
            <div class="row padding-25">
                <div class="half info">
                    <i class="fa fa-map-marker" style="width:30px"></i> Hanoi, VN<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: +84 859281121<br>
                    <i class="fa fa-envelope" style="width:30px"> </i> Email: chienpdGCH190396@fpt.edu.vn<br>
                </div>

                <div class="half">
                    <form action="" target="_blank">
                        <div class="row-padding" style="margin:0 -16px 8px -16px">
                            <div class="col col-half">
                                <input class="input border" type="text" placeholder="Name" required name="Name">
                            </div>

                            <div class="col col-half">
                                <input class="input border" type="text" placeholder="Email" required name="Email">
                            </div>
                                
                            <div class="clear"></div>
                        </div>
                            <input class="input border" type="text" placeholder="Message" required name="Message">
                            <input class="form-submit-btn" type="submit" value="SEND">
                    </form>
                        
                    <div class="clear"></div>
                </div> 
                <div class="clear"></div>
            </div>
                <div class="clear"></div>
        </div>

            <img src="./assets/img/lamborghini.jpg" alt="" class="end">

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