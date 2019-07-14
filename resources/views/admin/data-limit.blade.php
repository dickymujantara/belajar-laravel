<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Limit</title>
    <style>
        .limit{
            display:none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.link').click(function(e){
                e.preventDefault();
                $(this).next('.limit').css('display','block');
                // $('.limit');
            });

            $('.limit').keypress(function(event){
                var keyCode = event.keyCode;
                    if (keyCode == '13') {
                        var userId = $(this).next('.userId').val();
                        var nilai = $(this).val();
                        // var nilaiToken = $("input[name = '_token']").val();
                        var formData = {userId:userId,limit:nilai};
                        // $.post('/admin/data-limit/add',data,function(respond) {
                        //     location.reload();
                        // });
                        console.log(formData);
                        $.ajax({
                            type:'POST',
                            url:'/admin/data-limit/add',
                            data:formData,
                            success:function(data) {
                                location.reload();
                            }
                        });
                    } 
            });
        });
    </script>    
</head>
<body>
    {!! csrf_field() !!}
    <table>
        <tr>
            <th>No.</th>
            <th>User-id</th>
            <th>Limit</th>
            <th>Action</th>
        </tr>
        @foreach($datas as $key => $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->limit}}</td>
            <td>
                <a href="/admin/data-limit/add" class="link">Tambah Limit</a>
                <input type="text" name="limit" class="limit">
                <input type="hidden" name="id" class="userId" value="{{$data->user_id}}">
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>