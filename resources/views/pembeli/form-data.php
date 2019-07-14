<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merchant Form</title>
</head>
<body>
    <form action="/pembeli/form/insert" method="post" enctype="multipart/form-data">
        <input type="text" name="case" id="case"><br>
        <input type="file" name="photo"><br>
        <button type="submit">Submit Data</button><br>
        <span>Sisa Input: <?=$sisa?></span>
    </form>
</body>
</html>