<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Email</td>
        <td>Password</td>
        <td>Action</td>
    </tr>
    <?php foreach ($users as $value) {
        $data = "<tr>
        <td>$value->id</td>
        <td>$value->username</td>
        <td> $value->email </td>
        <td> $value->password </td>
        <td> <a href='/register/user/delete/$value->id'>Delete</a></td>
        </tr>";
    }
    echo $data;
    ?>
    </table>
</body>
</html>