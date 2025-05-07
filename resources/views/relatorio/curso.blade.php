<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content= "width=device">
    </head>
    <body>
        @if (isset($dados))
        <h1>{{$dados['curso']}}</h1>

        @@foreach ($dados['alunos'] as $alunos) 
        <p>{{$alunos}}</p>
        @endforeach

     <p>{{$dados['duração']}}</p>
     @endif
    </body>
</html>