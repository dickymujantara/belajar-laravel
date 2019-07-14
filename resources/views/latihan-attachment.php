<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        
        
        $(document).ready(function(){ 
            $('body').on('click','.delete',function(){
                var wadahDiv = $(this).parent('div');
                wadahDiv.remove();
            });
            


            $('body').on('click','.add',function(){
                // alert('add klik');

                var nomor = $(this).parent().attr('patokan');
                var nomorBaru = parseInt(nomor);
                nomorBaru++;
                var inputBaruDel =  "<button type='button' class ='delete'>-</button>";
                var inputBaruAdd =  "<button type='button' class ='add'>+</button>";
                var inputBaruText =  "<input type='file' name = 'file[]'>";
                var divBaru = "<br><div class='item' patokan ="+ nomorBaru + ">" + inputBaruText + inputBaruDel + inputBaruAdd + "</div><br>";
                
                $(divBaru).insertAfter(".item[patokan=" + nomor+"]");
            });

		});
          

    </script>
    <title>Attachment</title>
</head>
<body>
    <form action="/mail/attach/send" method="post" enctype="multipart/form-data">
        <input type="text" name="email" placeholder='Email'><br>
        <div class="item" patokan="1">
            <input type="file" name="file[]">
            
            <button type="button" class ="delete">-</button>
            <button type="button" class="add">+</button>
        </div>
        <br>
        <button type="Submit">Submit</button>
    </form>
</body>
</html>