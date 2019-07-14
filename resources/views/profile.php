<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#valdate').click(function(){
                var serial = $('#serial').val();

                $.ajax({
                    type:'post',
                    url:'/profile/generate',
                    data:{serialNum : serial},
                    success:function(data){
                        $('#encrypt').val(data);
                    }
                });
            });

            $('#submit').click(function(){
                var serial = $('#serial').val();
                var encrypt = $('#encrypt').val();

                $.ajax({
                    type:'post',
                    url:'/profile/validation',
                    data:{
                        serialNum : serial,
                        generate : encrypt
                    },
                    success:function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>
    <title>Profile</title>
</head>
<body>
    <label for="">Serial Number: </label>
    <input type="text" name="serial" id='serial'><br><br>
    <label for="">Encryption: </label>
    <input type="text" name='encrypt' id='encrypt'><br>
    <button type="submit" id='valdate'>Encrypt</button>
    <button type="submit" id='submit'>Validate</button>
</body>
</html>