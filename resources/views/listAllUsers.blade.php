<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
    <table>
        <tr>
            <td>#ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>ACOES</td>
        </tr>
        @foreach ($users as $user)
            
       
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form id ='ver_usuario_form{{$user->id}}' action="{{route('users.list', ['user' => $user->id])}}" method="get">
                    @csrf
                    <a class='ver_usuario_js' data-user='{{$user->id}}' href="javascript:void(0)">Ver Usuário</a>
                </form>
                
                <form action="{{route('users.destroy', ['user' => $user->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {

            $(".ver_usuario_js").click(function (e) { 
                let user_id = $(this).attr("data-user");

                $(`#ver_usuario_form${user_id}`).submit();
            });
            
        });
    </script>
    
</body>
</html>