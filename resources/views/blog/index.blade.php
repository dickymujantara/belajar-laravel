<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
       
       body{
           background-image:url({{asset('uploads/bg_3.jpg')}});
           }
        h1,h3{
            color: white;
            /* margin-bottom: 160px; */
            position: absolute;
            margin-left: 500px;
            margin-top: 200px;
            }
        #h3Home{
            margin-top:250px;
            margin-left:570px;
        }   

    </style>
    <title>Blog</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="#">Active</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        </nav>
        <h1>READ OUR BLOG</h1>
        <H3 id="h3Home">Home | Blog</H3>
</html>