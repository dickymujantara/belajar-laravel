<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        body{
            background-image:url('https://colorlib.com/preview/theme/pizza/images/bg_4.jpg');
        }
        section{
            background-image:url('https://colorlib.com/preview/theme/pizza/images/bg_3.jpg');
            height:500px;
        }
        .main-text{
            position: relative;
            top: 129px;
            left: 492px;
            background-color: rgb(46, 43, 43,0.8);
            width: 320px;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 15px;
        }
        .our-services{
            height:500px;
            background-image:url('https://colorlib.com/preview/theme/pizza/images/food.png');
            margin-top:-32px;
        }
        #text-contain{
            text-align:center;
        }
        .top-services{
            text-align:center;
        }
        .con-services{
            display:inline-block;
            width:33%;
            text-align:center;
        }
        .hot-meals{
            margin-top:50px;
            color:white;
            text-align:center;
        }
        .header-meal i{
            margin-top:15px;
        }
        .header-meal p{
            margin-top:15px;
            width:45%;
            margin-left:378px;
        }
        .menu-wrap{
            margin-top:50px;
            display:inline-block;
            width:20%;
        }
        .pic-pizza img{
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }
        footer{
            margin-top:50px;
            background-color:#1c1c1c;
            padding-top:30px;
        }
    </style>

</head>
<body>
    <div class="main-container-upper">
        <header class="navbar bg-dark">
            <div class="icon">
                <i class="fa fa-pizza-slice text-warning">Pizza</i>
            </div>
            <div>
                <ul class="nav-bar nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/services" class="nav-link text-white">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Contact</a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="jumbotron">
            <div class="main-text" id="text-contain">
                <h3 class="text-white">Services</h3>
                <div class="d-inline">
                    <span class="text-white" id="text-contain">Home</span>
                    <span class="text-secondary" id="text-contain">Services</span>
                </div>
            </div>
        </section>
        
        <div class="our-services">
            <div class="content-service">
                <div class="top-services">
                    <h3>Our Services</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="bot-services">
                    <div class="con-services">
                        <div class="icon-services">
                            <i class="fas fa-bread-slice fa-7x text-white"></i>
                        </div>
                        <h4>Healthy Food</h4>
                        <span>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</span>
                    </div>
                    <div class="con-services">
                        <div class="icon-services">
                            <i class="fa fa-car fa-7x text-white"></i>
                        </div>
                        <h4>Fastest Delivery</h4>
                        <span>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</span>
                    </div>
                    <div class="con-services">
                        <div class="icon-services">
                            <i class="fas fa-pizza-slice fa-7x text-white"></i>
                        </div>
                        <h4>Healthy Food</h4>
                        <span>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hot-meals">
            <div class="header-meal">
                <h3>HOT MEALS</h3>
                <i class="fa fa-grip-lines text-warning fa-xs"></i>
                <i class="fa fa-grip-lines text-warning fa-xs"></i>
                <i class="far fa-star text-warning fa-sm"></i>
                <i class="fa fa-star text-warning fa-lg"></i>
                <i class="far fa-star text-warning fa-sm"></i>
                <i class="fa fa-grip-lines text-warning fa-xs"></i>
                <i class="fa fa-grip-lines text-warning fa-xs"></i>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>

            <!-- start con-pizza -->
            <div class="con-pizza">
                <!-- start col-pizza -->
                <div class="col-pizza">
                    
                    <div class="menu-wrap">
                        <div class="pic-pizza">
                            <img src="https://colorlib.com/preview/theme/pizza/images/bg_1.png">
                        </div>
                        <div class="text-pizaa">
                            <div class="caption">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                            <div class="price">
                                <p class="text-warning">$2.90</p>
                            </div>
                            <button class="btn btn-outline-light">Add to cart</button>
                        </div>
                    </div>

                    <div class="menu-wrap">
                        <div class="pic-pizza">
                            <img src="https://colorlib.com/preview/theme/pizza/images/bg_1.png">
                        </div>
                        <div class="text-pizaa">
                            <div class="caption">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                            <div class="price">
                                <p class="text-warning">$2.90</p>
                            </div>
                            <button class="btn btn-outline-light">Add to cart</button>
                        </div>
                    </div>

                    <div class="menu-wrap">
                        <div class="pic-pizza">
                            <img src="https://colorlib.com/preview/theme/pizza/images/bg_1.png">
                        </div>
                        <div class="text-pizaa">
                            <div class="caption">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                            <div class="price">
                                <p class="text-warning">$2.90</p>
                            </div>
                            <button class="btn btn-outline-light">Add to cart</button>
                        </div>
                    </div>

                    <div class="menu-wrap">
                        <div class="pic-pizza">
                            <img src="https://colorlib.com/preview/theme/pizza/images/bg_1.png">
                        </div>
                        <div class="text-pizaa">
                            <div class="caption">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                            <div class="price">
                                <p class="text-warning">$2.90</p>
                            </div>
                            <button class="btn btn-outline-light">Add to cart</button>
                        </div>
                    </div>

                </div>
                <!-- end col-pizza -->
            </div>
            <!-- end con-pizza -->

            <footer>

                <div class="row">
                
                    <div class="col-sm">
                        <div class="header">
                            <h5 class="text-white">About Us</h5>
                        </div>
                        <div class="text-foot">
                            <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class="icon">
                            <i class="fab fa-facebook fa-3x"></i>
                            <i class="fab fa-twitter fa-3x"></i>
                            <i class="fab fa-instagram fa-3x"></i>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="header">
                            <h5 class="text-white">Recent Blog</h5>
                        </div>
                        <div class="text-foot">
                            <p class="text-secondary">
Even the all-powerful Pointing has no control about</p>
                        </div>
                        <div class="icon">
                            <i class="fab fa-facebook fa-3x"></i>
                            <i class="fab fa-twitter fa-3x"></i>
                            <i class="fab fa-instagram fa-3x"></i>
                        </div>
                    </div>


                    <div class="col-sm">
                        <div class="header">
                            <h5 class="text-white">About Us</h5>
                        </div>
                        <div class="text-foot">
                            <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class="icon">
                            <i class="fab fa-facebook fa-3x"></i>
                            <i class="fab fa-twitter fa-3x"></i>
                            <i class="fab fa-instagram fa-3x"></i>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="header">
                            <h5 class="text-white">About Us</h5>
                        </div>
                        <div class="text-foot">
                            <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class="icon">
                            <i class="fab fa-facebook fa-3x"></i>
                            <i class="fab fa-twitter fa-3x"></i>
                            <i class="fab fa-instagram fa-3x"></i>
                        </div>
                    </div>

                </div>

            </footer>

        </div>

    </div>
</body>
</html>