<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('body').on('submit','#formulir', function(evt){
            evt.preventDefault();
            var kirimDT = new FormData(this);
            $.ajax({
               type:'POST',
               url:'/register/jurusan/photo/new',
               data:kirimDT,
               processData: false,
                contentType: false,
               success:function(data) {
                  alert(data);
               }
             }); 
        });
    });
    </script>
</head>
<body>
    <form action="/register/jurusan/photo/new" method="post" id="formulir" enctype="multipart/form-data">
        <label for="nama">File Name</label><br>
        <input type="text" name="nama" id="nama"><br>
        <label for="file">Upload File</label><br>
        <input type="file" name="file" id="file"><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>