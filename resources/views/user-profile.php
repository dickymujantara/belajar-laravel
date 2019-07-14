<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        #wadahUpload{
            background-color: lightblue;
            width : 600px;
            height : 400px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('body').on('submit','#upload', function(evt){
                var kirimDT = new FormData(this);
                evt.preventDefault();
                $.ajax({
                type:'POST',
                url:'/register/user-profile/new',
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
    <form action="/register/user-profile/new" method="post" enctype ="multipart/form-data" id="upload">
        <input type="text" name="user" id="user"><br>
        <input type="file" name="pic" id="pic" multiple><br>
        <div id="wadahUpload"></div>
        <button type="submit">Upload</button>
    </form>
</body>
</html>