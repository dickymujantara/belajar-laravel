<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encryption</title>
</head>
<body>
    <form action="/encryption/generate" method="post">
        <input type="text" name="email" id="email"><br>
        <input type="text" name="checking" placeholder="Please Input Encrypted Text"><br>
        <button type="submit">Submit</button>
    </form>
    <?php if (isset($data)) {
       echo "<p>$data</p>";
    }
    ?>
</body>
</html>