<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function back() {
            document.location.href = '/home';
        }
    </script>
    <style>
        div{
            text-align: center;

        }
        button{
            width: 200px;
            height: 50px;
        }
        .btn{
            display:inline-block;
        }
    </style>
</head>
<body>
    <div>
        <h1>Are You Sure Want to Remove This <?= $email ?></h1>
        <div class="btn">
            <form action="/mail/unsubscribe" method="post">
                <input type="hidden" name="email" value="<?= $email ?>">
                <button type="submit">YES</button>
            </form>
        </div>
        <div class="btn">
            <button type="button" onclick = "back();">NO</button>
        </div>
    </div>
</body>
</html>