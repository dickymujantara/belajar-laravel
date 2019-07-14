<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container-box{
            width: 300px;
            height: 300px;
            border:solid;
        }
        .preview{
            width: 300px;
            height: 300px;
            border:solid;
            display:none;
        }
        #file{
            display:none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        function uploadData(formData) {
            $.ajax({
                type:'POST',
                url:'/project/form/multiple/new',
                data:formData,
                processData: false,
                contentType: false,
               success:function(data) {
                  addImageToPreviewDiv(data);
               }
            });
        }

        function addImageToPreviewDiv(namaFile) {
            var elementBaru = "<img src='/uploads/" + namaFile + "' width='300' height='400'><br>";
            $(".preview").append(elementBaru);
            $(".preview").css("display","inline-block");
        }

        $(document).ready(function(){
            //tahap 1 utk membatalin perintah open pada saat drag
            $("html").on("dragover",function(e){
                e.preventDefault();
                e.stopPropagation();
            });
            //tahap 2 utk membatalin perintah open pada saat drop
            $("html").on("drop",function(e){
                e.preventDefault();
                e.stopPropagation();
            });
            //tahap 3 bikin fungsi div kalo di klik muncul browse
            $(".container-box").click(function(){
                $("#file").click();
            });
            //tahap 4
            $(".container-box").on("dragover",function(e){
                e.preventDefault();
                e.stopPropagation();
            });
            //tahap 5
            $(".container-box").on("drop",function(e){
                e.preventDefault();
                e.stopPropagation();
                $("h2").text("Uploading...");
                var file = e.originalEvent.dataTransfer.files;
                var fd = new FormData();
                fd.append('file', file[0]);
                uploadData(fd);
                e.originalEvent.dataTransfer.clearData();
            });
            //tahap 6 user ngebatalin
            $(".container-box").on('dragleave', function(e){
                e.stopPropagation();
                e.preventDefault();
                $("h2").text("Waa...Batal?!");
            });
            //tahap 7
            $("#file").change(function(){
                var fd = new FormData();
                var files = $('#file')[0].files[0];
                fd.append('file',files);
                uploadData(fd);
                $("h2").text("Uploading...");
            });
        });
    </script>
</head>
<body>
    <form action="/register/jurusan/photo/new" method="post" id="formulir" enctype="multipart/form-data">
        <label for="nama">File Name</label><br>
        <input type="text" name="nama" id="nama"><br>
        <div class="container-box">
            <h2>Drag Something Here...</h2>
        </div>
        <input type="file" name="file" id="file">
        <br>
        <div class="preview">
            <h3>Preview Image</h3>
        </div>
        <button type="submit">Upload</button>
    </form>
</body>
</html>