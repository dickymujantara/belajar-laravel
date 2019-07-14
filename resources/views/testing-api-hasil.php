<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <script>
        function copyUrl() {
            var body = document.getElementsByTagName('body')[0];
            var selectUrl = document.getElementById('url');
            var linkNya  = selectUrl.getAttribute('href');

            var tempInput = document.createElement('INPUT');
            body.appendChild(tempInput);
            tempInput.setAttribute('value', linkNya);
            tempInput.select();
            document.execCommand('copy');
            body.removeChild($tempInput);
            alert("Berhasil");
        }
    </script>
</head>
<body>
    <a href="<?= $data ?>" id="url"></a>
    <button onclick = "copyUrl()">Copy</button>
</body>
</html>