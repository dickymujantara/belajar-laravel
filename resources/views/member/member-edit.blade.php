<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Member Edit</title>
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
                var member = $('#member').val();
                var id = $('#id').val();
                $.ajax({
                    type:'post',
                    url:'/member/update',
                    data:{
                        serialNum : serial,
                        generate : encrypt,
                        member: member,
                        id: id
                    },
                    success:function(respond){
                        alert(respond);
                        document.location.href = '/member';
                    }
                });
            });
        });
    </script>
</head>
<body>
        <input type="hidden" name="id" value="{{$data->id}}" id='id'>
        <label for="">Name: </label>
        <input type="text" name="name" value="{{ $data->name }}" readonly><br>
        <label for="">Email: </label>
        <input type="text" name="email" value="{{ $data->email }}" readonly><br>
        <label for="">Member: </label>
        <input type="text" id="member" value="{{$data->member}}" readonly>
        <br>
        <label for="">Serial Number: </label>
        <input type="text" name="serial" id='serial'><br>
        <label for="">Encryption: </label>
        <input type="text" name='encrypt' id='encrypt'><br>
        <button type="submit" id='valdate'>Encrypt</button>
        <button type="submit" id='submit'>Validate</button>
</body>
</html>