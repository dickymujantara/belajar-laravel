<!DOCTYPE html>
<html>
<head>
   <title>Register Profile</title>
   <style rel="stylesheet" type="text/css" media="screen" href="main.css"></style>
   <style>
      #wadahUpload{
         background-color: blue;
         width: 500px;
         height: 500px;
      }
   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function(){
         

            $('body').on('submit','#formulir', function(evt){
            evt.preventDefault();

            //alert("akan upload");
         var kirimDt = new FormData(this);
         //alert("cb");

            $.ajax({
               type:'POST',
               url:'/siswa/profilesiswa/new',
               data:kirimDt,
               processData:false,
               contentType:false,
               success:function(data) {
                  alert(data);
               }
             });

            //alert("done!");

         });

         });
   </script>
</head>
<body>
<form action="/siswa/profilesiswa/new" id="formulir" method="post" enctype="multipart/form-data">
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
         <table>
            <tr>
               <td>NIP</td>
               <td><input type = "text" name = "nip" /></td>
            </tr>
            <tr>
               <td>Nama</td>
               <td><input type = "text" name = "nama" /></td>
            </tr>
            <tr>
               <td>Email</td>
               <td><input type = "text" name = "email" /></td>
            </tr>
            <tr>
               <td>Alamat</td>
               <td><input type = "text" name = "alamat" /></td>
            </tr>
            <tr>
               <td>TTL</td>
               <td><input type = "text" name = "ttl" /></td>
            </tr>
            <tr>
               <td>Profile</td>
               <td><input type = "text" name = "profile" /></td>
            </tr>
            <tr>
               <td>file</td>
               <td><input type = "file" name = "file" /></td>
            </tr>
            <tr>
               <td colspan = "2" align = "center">
                  <input id="submit" type = "submit" value = "Register" />
               </td>
            </tr>

         </table>
</form>
</body>
</html>