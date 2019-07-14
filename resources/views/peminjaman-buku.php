<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Buku</title>

    <!-- jquery global cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            //code here..
            $('.delete').click(function(){
                alert('delete klik');
            });


            $('body').on('click','.add',function(){
                // alert('add klik');

                var nomor = $(this).parent().attr('patokan');
                var nomorBaru = parseInt(nomor)+1;

                var labelBaru = "<label>Book Name</label>"
                var inputBaruDel =  "<button type='button' class ='delete'>-</button>";
                var inputBaruAdd =  "<button type='button' class ='add'>+</button>";
                var inputBaruText =  "<input type='text' name = 'buku[]' Placeholder='Book Name...'>";
                var divBaru = "<div class='item' patokan ="+ nomorBaru + ">" + labelBaru + inputBaruText + inputBaruDel + inputBaruAdd + "</div>";
                    $(divBaru).insertAfter(".item[patokan=" + nomor+"]");
                    // $("button['type = button']").insertAfter(".item");
            });
        });
    </script>
</head>
<body>
    <form action="/borrow/book/new" method="post">
        <div class="item" patokan="1">
            <label>Book Name</label>
            <input type="text" name = "buku[]" Placeholder="Book Name...">
            <button type="button" class ="delete">-</button>
             <button type="button" class="add">+</button>
        </div>
        <div class="new-item"></div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>