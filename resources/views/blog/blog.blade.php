<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        #welcome{
            background-image:url("{{url('/uploads/bg_1.jpg')}}");  
            color:white;
            height:400px;
        }
        h1,h3{
            margin-left:50%;
            position: absolute;
            margin-top: 212px;
        }
        h3{
            margin-top: 250px;
            margin-left:55%;
        }
        #read{
            font-size: 30px;
            font-weight: 400;
            position: relative;
            text-transform: uppercase;
            
        }
        #readBlog{
            margin-left:50%;
        }
        #readBlog2{
            margin-left:30%;
        }
        .image{
            /* overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: relative;
            display: block;
            width: 100%;
            height: 270px; */
            width: 300px;
            margin-top: 50px;
            margin-left: 50px;
                }
        .isi{
            display: inline-block;
            margin-left:50px;
            margin-top: 60px;
            
        }
        .fontIsi{
            margin-left: 50px;
            color:white;
        }
        #articlePage{
            background-image:url("{{url('/uploads/bg_4.webp')}}"); 
            margin-top: -20px;
        }
        #readBlog, #readBlog2{
            color:white;
        }
        #container{
            width:100%;
        }
        #readBlog{
            position: absolute;
            margin-top: 30px;
        }
        #readBlog2{
            position: absolute;
            margin-top: 70px;
        }
        .menuNavigasi{
            background-color: #6b778d;
            position: fixed;
            top: 0;
            z-index: 2;
            width: 100%;
            }
            .menu{
            margin-left: 25px;
            color: white;
        }
        #pizzaLogo{
            margin-left:0px;
        }
        #menuHome{
                margin-left: 850px;
        }
    </style>
</head>
<body>
    <div id="container">   

    <div class="menuNavigasi">
        <i class="fas fa-pizza-slice"></i>
            <span id="pizzaLogo">Pizza</span>
            <span id="menuHome" class="menu">Home</span>
            <span class="menu">Menu</span>
            <span class="menu">Services</span>
            <span class="menu">Blog</span>
            <span class="menu">About</span>
            <span class="menu">Contact</span>
        </div>

        <div id="welcome">
            <div id="kata">
            <h1>Read Our Blog</h1>
            <h3>Home|Blog</h3>
            </div>
        </div>
        
        <div id="articlePage">

            <div id="article">
                <h2 class="read" id="readBlog">Read Our Blog</h2>
                <span class="read" id="readBlog2">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the 
                    blind texts.
                </span>
            </div>

             <div>   
                <div class="isi">   
                    <img class="image" src="{{url('/uploads/pizza1.webp')}}">
                    <p class="fontIsi">The Delicious Pizza</p>
                    <p class="fontIsi" >A small river named Duden flows by their </p>
                    <p class="fontIsi">place and supplies it with the necessary regelialia.</p>
                </div>  
                <div class="isi">   
                    <img class="image" src="{{url('/uploads/pizza1.webp')}}">
                    <p class="fontIsi">The Delicious Pizza</p>
                    <p class="fontIsi">A small river named Duden flows by their </p>
                    <p class="fontIsi">place and supplies it with the necessary regelialia.</p>
                </div>  
                <div class="isi">   
                    <img class="image" src="{{url('/uploads/pizza1.webp')}}">
                    <p class="fontIsi">The Delicious Pizza</p>
                    <p class="fontIsi">A small river named Duden flows by their </p>
                    <p class="fontIsi">place and supplies it with the necessary regelialia.</p>
                </div>        
             </div> 

             <div>   
                <div class="isi">   
                    <img class="image" src="{{url('/uploads/image_3.webp')}}">
                    <p class="fontIsi">The Delicious Pizza</p>
                    <p class="fontIsi" >A small river named Duden flows by their </p>
                    <p class="fontIsi">place and supplies it with the necessary regelialia.</p>
                </div>  
                <div class="isi">   
                    <img class="image" src="{{url('/uploads/image_3.webp')}}">
                    <p class="fontIsi">The Delicious Pizza</p>
                    <p class="fontIsi">A small river named Duden flows by their </p>
                    <p class="fontIsi">place and supplies it with the necessary regelialia.</p>
                </div>  
                <div class="isi">   
                    <img class="image" src="{{url('/images/image_3.webp')}}">
                    <p class="fontIsi">The Delicious Pizza</p>
                    <p class="fontIsi">A small river named Duden flows by their </p>
                    <p class="fontIsi">place and supplies it with the necessary regelialia.</p>
                </div>        
             </div>   
        </div>
    </div> 

</body>
</html>