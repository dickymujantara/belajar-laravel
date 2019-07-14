<!DOCTYPE html>
<html>
<head>
	<title>Jurusan Form</title>
	<!-- jquery global cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        
        
        $(document).ready(function(){
            $('body').on('submit','#formulir', function(evt){
            var kirimDT = new FormData(this);
            evt.preventDefault();
            $.ajax({
               type:'POST',
               url:'/register/jurusan/new',
               data:kirimDT,
               processData: false,
                contentType: false,
               success:function(data) {
                  alert(data);
               }
            // evt.preventDefault();
            //     alert('diklik');
             });


         });

            
            $('body').on('click','.delete',function(){
                var wadahDiv = $(this).parent('div');
                wadahDiv.remove();
            });
            


            $('body').on('click','.add',function(){
                // alert('add klik');

                var nomor = $(this).parent().attr('patokan');
                var nomorBaru = parseInt(nomor);

                var labelBaru = "<label>Nama Jurusan</label>"
                var inputBaruDel =  "<button type='button' class ='delete'>-</button>";
                var inputBaruAdd =  "<button type='button' class ='add'>+</button>";
                var inputBaruText =  "<input type='text' name = 'buku[]' Placeholder='Nama Jurusan...'>";
                var divBaru = "<div class='item' patokan ="+ nomorBaru + ">" + labelBaru + inputBaruText + inputBaruDel + inputBaruAdd + "</div>";
                    $(divBaru).insertAfter(".item[patokan=" + nomor+"]");
                    // $("button['type = button']").insertAfter(".item");
            });
			

			// $('#formulir').submit(function(e){
			// 		e.preventDefault(e);
				
			// 	$.post( '/register/jurusan/new', $(this).serialize(), function(data) {
			// 		alert('ada ' + data);
			// 	});
				
			// });

            // $('body').on('submit','#upload', function(evt){
            //     var kirimDT = new FormData(this);
            //     evt.preventDefault();
            //     $.ajax({
            //     type:'POST',
            //     url:'/register/user-profile/new',
            //     data:kirimDT,
            //     processData: false,
            //     contentType: false,
            //     success:function(data) {
            //         alert(data);
            //     }
            //     });
            // });

		});
          

    </script>
</head>
<body>
<form 
 method="post" id="formulir" enctype="multipart/form-data">
		<div class="item" patokan="1">
            <label>Nama Jurusan</label>
            <input type="text" name = "jurusan[]" Placeholder="Nama Jurusan...">
            <button type="button" class ="delete">-</button>
             <button type="button" class="add">+</button><br>
             <label for="photo">Photo</label>
             <input type="file" name="photo" id="photo">
        </div>
        <div class="new-item"></div>
        <button type="submit">Submit</button>
</form>

</body>
</html>