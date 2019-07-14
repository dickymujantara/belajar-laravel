<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jurusan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form action="/register/jurusan/update/<?php echo $jurusan[0]->id ?>" method="post">
<table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="jurusan" value="<?php echo $jurusan[0]->nama ?>" >
                    </td>
                </tr>
                <tr>
                    <button type="submit">Submit</button>
                </tr>
    </table>
</form>
</body>
</html>