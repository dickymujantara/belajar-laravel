<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        .maincontainer{
            background-image:url('https://colorlib.com/preview/theme/pizza/images/bg_1.jpg');
        }
        .container-1,.container-2{
            margin-left:200px;
            margin-top:20px;
            margin-bottom:20px;
            color:white;
        }
        .container-3{
            background-image:url('https://colorlib.com/preview/theme/pizza/images/bg_3.jpg');
            padding-top:200px;
            padding-bottom:200px;
            width: 1349px !important;
        }
        .img-1,.text-1,.img-2,.text-2{
            display:inline-block;
            z-index:0;
            margin-top:41px;
        }
        .text-1,.img-2{
            margin-left:60px;
        }
        .text-3{
            text-align:center;
        }
        .info,.info-2{
            display:inline-block;
        }
        .info{
            background-color:#000;
            padding-right: 110px;
        }
        .info-2{
            background-color:#fac564;
            margin-left: -4px;
            padding-top: 40px;
            padding-bottom: 14px;
            padding-right: 499px;
        }
        .sub-item-info{
            display:inline-block;
            margin-right:15px;
            padding-top:20px;
            margin-left: 17px;
        }
        .sub-item-info p{
            font-size:10px;
        }
        .icon span{
            margin-right:15px;
            margin-left:15px;
        }
        .img-welcome{
            background: url('https://colorlib.com/preview/theme/pizza/images/about.jpg');
            width:800px;
            height:500px;
        }
        .desc-welcome{
            float:right;
            background-image:url('https://colorlib.com/preview/theme/pizza/images/bg_4.jpg');
            /* background-color:lightgrey; */
            padding-left:26px;
            width:549px;
            height: 500px;
        }
        .desc-header{
            margin-right:21px;
            margin-top:10px;
        }
        .desc{
            margin-top:50px;
        }
        .top-nav{
            position:fixed;
            z-index:3;
            padding-top:10px;
            padding-bottom:10px;
            padding-right:18px;
            background-color:rgb(75, 76, 76,0.9);
        }
        .top-nav i, .top-nav ul{
            display:inline-block;
        }
        .top-nav i{
            margin-left:10px;
        }
        .nav{
            margin-left: 804px;
        }
        .nav li{
            display:inline-block;
            margin-left: 50px;
        }
        .contact{
            background:#2b2b2b;
            height: 465px;
        }
        .contact-left, .contact-right{
            float:left;
        }
        .contact-right{
            margin-left: 245px;
            margin-top: 95px;
        }
        #btn-toggle{
            position: fixed;
            top: 350px;
            right: -3px;
        }
        #left-toggle{
            position: fixed;
            top: 350px;
            right: 28px;
        }
        /* saat ada card body */
        #chat-room{
            position: fixed;
            right:140px;
            /* top: 340px;   */
            top: 635px;
            z-index:5; 
        }
        #arr-up,#arr-down{
            cursor:pointer;
        }
        #arr-down{
            display:none;
        }
        #chat-body{
            display:none;
        }
    </style>
</head>
<body>
    <div class="top-nav">
        <i class='themes fa fa-pizza-slice 2px'></i>
        <ul class="nav text-white">
            <a href="#home"><li>Home</li></a>
            <li>Menu</li>
            <li>Services</li>
            <li>Blog</li>
            <a href="#contact"><li>Contact</li></a>
            <a href="#" id="changer">Change Theme</a>
        </ul>
    </div>
    <div class="maincontainer" id="home">
        <div class="slider-item">
            <div class="container-1">
                <div class="img-1">
                    <img src="https://colorlib.com/preview/theme/pizza/images/bg_1.png" width="300" height="300">
                </div>
                <div class="text-1">
                    <span>Delicious</span>
                    <h1>Italian Cuizine</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="container-2">
                <div class="text-2">
                    <span>Crunchy</span>
                    <h1>Italian Cuizine</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
                <div class="img-2">
                    <img src="https://colorlib.com/preview/theme/pizza/images/bg_2.png" width="300" height="300">
                </div>
            </div>
            <div class="container-3">
                <div class="text-3">
                    <span class="text-white">Welcome</span>
                    <h1 class="text-white">Italian Cuizine</h1>
                    <p class="text-white">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <button class="btn btn-warning text-white">Order Now!</button>
                    <button class="btn btn-light">View Menu</button>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="item-info-1">
                <div class="sub-item-info">
                    <h6 class="text-white"><i class="fas fa-phone text-warning"></i> 000 (123) 456 7890</h6>
                    <p class="text-secondary">A small river named Duden flows</p>
                </div>
                <div class="sub-item-info">
                    <h6 class="text-white"><i class="fas fa-map-marker-alt text-warning"></i> 198 West 21th Street</h6>
                    <p class="text-secondary">Suite 721 New York NY 10016</p>
                </div>
                <div class="sub-item-info">
                    <h6 class="text-white"><i class="far fa-clock text-warning"></i> Open Monday-Friday</h6>
                    <p class="text-secondary">8:00am - 9:00pm</p>
                </div>
            </div>
        </div>
        <div class="themes info-2">
            <div class="icon">
                <span><i class="fab fa-twitter text-white"></i></span>
                <span><i class="fab fa-facebook-f text-white"></i></span>
                <span><i class="fab fa-instagram text-white"></i></span>
            </div>
        </div>
        <div class="welcome">
            <div class="desc-welcome">
                <div class="desc-header">
                    <h3 class="text-white">WELCOME TO <i class="fas fa-pizza-slice text-warning"></i> PIZZA A RESTAURANT</h3>
                </div>
                <div class="desc text-secondary">
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, 
                    made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                </div>
            </div>
            <div class="img-welcome"></div>
        </div>   
    </div>
    <div class="contact" id="contact">
        <div class="contact-left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.316038723926!2d107.667139!3d-6.940811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc81e70759e23cd45!2sAtmosphere+Gym!5e0!3m2!1sen!2sid!4v1561195754588!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contact-right">
            <h3 class="text-white">Contact Us</h3>
            <div class="form-group">
                <input type="text" name="" id="firstName" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" name="" id="lastName" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="email" name="" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" name="" id="msg" class="form-control" placeholder="Message">
            </div>
            <button class="btn btn-warning text-white" id="btnSend"><i class='fa fa-paper-plane'></i> Send</button>
        </div>
    </div>
    <div class="toggle">
        <div id="arrow-toggle">
        <div class="btn-group-vertical" id="left-toggle">
            <button class="btn btn-light"><i class="fa fa-arrow-left text-secondary"></i></button>
        </div>
        </div>
        <div class="btn-group-vertical" id="btn-toggle">
            <button class="btn btn-light"><i class="fab fa-facebook-square text-primary"></i></button>
            <button class="btn btn-light"><i class="fab fa-twitter-square text-primary"></i></button>
            <button class="btn btn-light"><i class="fab fa-google-plus-square text-danger"></i></button>
        </div>
    </div>
    <div class="col-lg-3" id='chat-room'>
        <div class="card border-primary" >
            <div class="card-header bg-primary text-white">
                <i class='fa fa-comment'></i> <b>Email Us</b>
                <span class="badge float-right" id="arr-down"><i class="fa fa-arrow-down"></i></span>
                <span class="badge float-right" id="arr-up"><i class="fa fa-arrow-up"></i></span>
            </div>
            <div class="card-body" id="chat-body">
                <div class="form-group">
                    <input type="text" name="" id="firstName" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="" id="lastName" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="email" name="" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="" id="msg" class="form-control" placeholder="Message">
                </div>
                <button class="btn btn-warning text-white" id="btnSend"><i class='fa fa-paper-plane'></i> Send</button>
            </div>
        </div>
    </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.min.js"></script>
<script src="{{ asset('/js/landing.js') }}"></script>
<script>
$(document).ready(function(){

    $('#changer').click(function(e){
        e.preventDefault();
        // only 1 single code
        //yang merubah all elements menjadi 'green'
       // $('.themes').css('color', 'green !important');
        //$('.themes').css('background-color', 'green !important');
        $('.themes').attr('style', 'background-color: green !important');
        alert('Change Theme Clicked');
    });


    $('#btnSend').click(function(){
      var firstName = $('#firstName').val();
      var lastName = $('#lastName').val();
      var msg = $('#msg').val();
      var email = $('#email').val();
      
      var data = {'firstName': firstName, 'lastName': lastName, 'msg': msg, 'email': email}

        $.ajax({
            type:'post',
            url:'/mail/sent/landing',
            data:data,
            success:function(response){
                alert(response);
            }
        });

    });

    $('#arr-up').click(function(){
      $('#chat-room').css('top','340px');
      $('#chat-body').css('display','block');
      $('#arr-up').css('display','none');
      $('#arr-down').css('display','block');
    });

    $('#arr-down').click(function(){
      $('#chat-room').css('top','635px');
      $('#chat-body').css('display','none');
      $('#arr-up').css('display','block');
      $('#arr-down').css('display','none');
    });
});
</script>
</body>
</html>