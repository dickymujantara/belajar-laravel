<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>    
    <title>Membership</title>
</head>
<body>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Member</th>
            <th>Edit</th>
        </tr>
        @foreach($datas as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>
                @if($data->member == "gold")
                    <span class="badge badge-warning">{{ucfirst($data->member)}}</span>
                @elseif($data->member == "silver")    
                    <span class="badge badge-light" style= "background-color:#c4c3c2;">{{ucfirst($data->member)}}</span>
                @elseif($data->member == "bronze")
                    <span class="badge badge-secondary" id="color" style= "background-color:#723901;">{{ucfirst($data->member)}}</span>
                @endif
            </td>
            <td><a href="/member/edit/{{$data->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>