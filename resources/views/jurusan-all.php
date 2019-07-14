<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View All User Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<a href="/register/jurusan">
<button>Add New</button></a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nama Jurusan</td>
        </tr>
        <?php foreach ($jurusan as $value)
         echo $data = "<tr>
            <td> $value->id </td>
            <td> $value->nama </td>
            <td><a href = '/register/jurusan/view/$value->id'>Edit</a></td>
            <td><a href = '/register/jurusan/delete/$value->id'>Delete</a></td>
         </tr>";
         ?>
    </table>
</body>
</html>