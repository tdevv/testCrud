<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD>NOVO</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        a:link{
            text-decoration:none;
        }
        a{
            color: inherit;
        }

        .btn1{
            background-color: #0c63e4;
            color: white;
            width:80px;
            height:40px;
            border-radius: 15px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            text-decoration:none;
        }
        </style>
</head>
<body>

<h1 class="text-center">Insira nova despesa</h1>
        <form enctype="multipart/form-data" action="{{route('salvar_registro')}}" method="post">
            @csrf
        <div><label for="id">Id</label>
            <input class="form-control" type="text" name="id" title="id" id="id"></div>

        <div><label for="description">descrição</label>
            <input class="form-control" type="text" title="text" name="description" id="description"></div>

        <div><label for="date">Data</label>
            <input class="form-control" type="date" name="date"title="date"  id="date"></div>

        <div><label for="file">file</label>
            <input class="form-control" type="file" name="file" title="file" id="file"></div>

        <div><label for="user">Usuario</label>
            <input class="form-control" type="text" name='user' title="user" id="user"></div>

        <div><label for="price">Valor</label>
            <input class="form-control" type="number" name="price" title="price" id="price"></div>

            <button class="btn1" type="submit">Enviar</button>
            <button class="btn1"><a href="{{route('relatorio')}}" title="relatorio">Relatorio</a></button>




        </form>

</body>
</html>
