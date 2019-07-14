<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo Form::open(array('url'=>'foo/bar'));
        echo Form::label('Username');
        echo '<br>';
        
        echo Form::text('username','Username');
        echo '<br>';

        echo Form::text('email','Example@gmail.com');
        echo '<br>';

        echo Form::password('password');
        echo '<br>';

        echo Form::checkBox('name','value');
        echo '<br>';

        echo Form::radio('name','value');
        echo '<br>';

        echo Form::file('Image');
        echo '<br>';

        echo Form::select('size', array('L' => 'Large', 'S' => 'Short'));
        echo '<br>';

        echo Form::submit('Click Me');
        echo Form::close();

    ?>
</body>
</html>