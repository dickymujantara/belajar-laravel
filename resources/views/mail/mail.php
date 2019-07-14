<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color:#eeeeee;
        }
        #container{
            margin: 0 auto;
            widht:500px;
        }
        .bar{
            background-color:lightgreen;
            height:10px;
        }
        .background{
            background-color:White;
            text-align:center;
        }
        .link{
            text-align:center;   
        }
        #btn{
            width: 200px;
            height: 30px;
            background-color: #a1dd70;
            color: white;
            margin-bottom: 25px;
            border-radius: 10px 10px 10px 10px;

        }
    </style>
</head>
<body>
        <div class="title">
            <h1>BelajarLaravel.com</h1>
        </div>
    <div id="container">
         <div class="bar"></div>
            <div class="background">
                <img src="http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/256/Places-user-identity-icon.png">
                <p>Hi ,<?= $username ?></p>
                <!-- <p>Thanks For Register</p>
                <p>Click Button Below For Confirmation</p> -->
                <h3>Message: </h3>
                <p><?=$msg?></p>
            </div>
    </div>    
</body>
</html>