<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        window.setTimeout(() => {
           document.location.href = '/register/user/all';
        }, 500);
    </script>
</head>
<body>
    <div id="success">
        <h1>Success <?= $status ?></h1>
        <a href="/register/user/all"><button>View All</button></a>
    </div>
</body>
</html>