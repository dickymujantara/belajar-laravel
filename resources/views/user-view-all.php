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
    <a href="/register/user"><button>Add New</button></a>
    <table>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Email</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php foreach ($users as $user)
         echo $data = "<tr>
            <td> $user->id </td>
            <td> $user->username </td>
			<td> $user->password </td>
			<td> $user->email </td>
            <td><a href = '/register/user/edit/$user->id'>Edit</a></td>
            <td><a href = '/register/user/delete/$user->id'>Delete</a></td>
         
            </tr>";
         ?>
    </table>
</body>
</html>