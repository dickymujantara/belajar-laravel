<!DOCTYPE html>
<html>
<head>
	<title>User Registrasi</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
        $(document).ready(function(){
         $('body').on('change','#province', function(evt){
            evt.preventDefault();
            //alert("akan upload");
            var kepilih = $(this).children(
                'option:selected').val();
            // alert(kepilih);
			      // console.log(kepilih);
            $.ajax({
               type:'GET',
               url:'/register/user/object',
               data:{province:kepilih},
               success:function(data) {
                //   alert(data);
                  //$('#project-name').val(data);
                  var dapetData = JSON.parse(data);
				          console.log(dapetData);
                  var selectElement = $('#city');
                  var opsiAll = "";
                  $.each(dapetData,function(key,value){
                    //alert(key + "=" + value.name);
                    console.log(key + "=" + value.city);
                    var nama = value.city;
                    var opsiBaru = "<option value='nama'>" + nama+"</option>";
                    opsiAll += opsiBaru;
                  });
                  selectElement.html(opsiAll);
               }
             });
        });
		    //end of search city
      $('body').on('keyup','#username', function(){
            var user = $(this).val();
            // console.log(user);
          $.ajax({
              type: 'GET',
              url: '/register/user/data',
              data: {username:user},
              success:function(data){
                var getData = JSON.parse(data);
                console.log(getData);
                var target = $('#icon');
                if (getData.length > 0) {
                    var showIcon = "fa fa-times-circle";
                    target.attr("class",showIcon);
                }else{
                    var showIcon = "fa fa-check-circle";
                    target.attr("class",showIcon);
                }
              } 
            });
          });
          //end of search username
      });
    </script>    
</head>
<body>
<form action="/register/user/new" method="post">
	<input type="text" name="email" placeholder="email"/></br>
	<input type="text" name="username" id="username"  placeholder="username"/><i id="icon"></i></br>
	<input type="text" name="password"  placeholder="password"/></br>
	<textarea name="address" id="address" cols="30" rows="10"></textarea><br>
	<select name="province" id="province">
		<option value="">===Pilih===</option>
		<option value="Jawa Barat">Jawa Barat</option>
		<option value="Jawa Tengah">Jawa Tengah</option>
		<option value="Jawa Timur">Jawa Timur</option>
	</select><br>
	<select name="city" id="city">
		<option value="">===Pilih===</option>
	</select><br>
	<input type="submit" name="submit"  value="Submit"></br>
</form>
</body>
</html>