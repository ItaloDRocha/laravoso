<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuário</title>
</head>
<body>
    <form action="{{route('user.update', ['user' => $user->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <label for="">Nome do usuario: </label>

        <input type="text" name="name" value="{{$user->name}}">

        <label for="">Email do usuário: </label>

        <input type="email" name="email" value="{{$user->email}}">

        <label for="">Senha do Usuário:</label>

        <input type="password" name="password">

        <input type="submit" value="Editar Usuário">
        
    </form>
</body>
</html>