<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadatrar nova classe</title>
</head>
<body>

    <form action="{{ route('registrar_classe')}}" method="POST">

        @csrf
        <label for="description">Descrição</label> <br>
        <input type="text" name="description"> <br>

        <label for="duracao">Duracao</label> <br>
        <input type="text" name="duracao"> <br>

        <label for="sigla">Sigla</label> <br>
        <input type="text" name="sigla"> <br>


        <button>Salvar</button>
    </form>
    
</body>
</html>