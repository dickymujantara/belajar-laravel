<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
         $('body').on('change','#username', function(evt){
            evt.preventDefault();
            //alert("akan upload");
            var kepilih = $(this).children(
                'option:selected').val();
            // alert(kepilih);

            $.ajax({
               type:'GET',
               url:'/project/data/object',
               data:{username:kepilih},
               success:function(data) {
                //   alert(data);
                  //$('#project-name').val(data);
                  var dapetData = JSON.parse(data);
                  var selectElement = $('#project-name');
                  var opsiAll = "";
                  $.each(dapetData,function(key,value){
                    //alert(key + "=" + value.name);
                    console.log(key + "=" + value.name);
                    var nama = value.name;
                    var opsiBaru = "<option value='nama'>" + nama+"</option>";
                    opsiAll += opsiBaru;
                  });
                  selectElement.html(opsiAll);
               }
             });
            //     .done(function (msg) {
            //        alert("Projectnya adalah: " + msg); 
            //     });
        //  //alert("done!");

        });

      });
    </script>    
</head>
<body>
    <form action="" method="post" id="formproject">
        <select name="username" id="username">
            <option value="">---Pilih---</option>
            <option value="admin">admin</option>
            <option value="general">general</option>
        </select>
        <select name="project-name" id="project-name">
            <option value="">---Pilih---</option>
        </select>
    </form>
</body>
</html>