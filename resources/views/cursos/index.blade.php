<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados escolares</title>
</head>
<body>

<a href="/cursos/add">Novo</a>
    <table>
        <tr>
            <th>nome</th>
            <th>nome_reduzido</th>
            
        </tr>

        @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->nome_reduzido }}</td>
            <td><a href="/cursos/{{ $curso->id }}/destroy">Remover</a></td>
            <td><a href="/cursos/{{ $curso->id }}/edit">Alterar</a></td>
        </tr>
        @endforeach
        
    </table>
    
</body>
</html> 


