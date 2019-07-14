<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="/register/user/update/<?= $users[0]->id ?>" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?php echo $users[0]->username ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $users[0]->email ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password" value="<?php echo $users[0]->password ?>">
                </td>       
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>