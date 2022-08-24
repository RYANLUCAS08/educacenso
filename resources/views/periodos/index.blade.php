<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados escolares</title>
</head>
<body>

<a href="/periodos/add">Novo</a>
    <table>
        <tr>
            <th>Ano</th>
            <th>Início</th>
            <th>Fim</th>
            <th>Ações</th>
        </tr>

        @foreach ($periodos as $periodo)
        <tr>
            <td>{{ $periodo->ano }}</td>
            <td>{{ $periodo->dt_inicio }}</td>
            <td>{{ $periodo->dt_fim }}</td>
            <td><a href="/periodos/{{ $periodo->id }}/destroy">Remover</a></td>
            <td><a href="/periodos/{{ $periodo->id }}/edit">Alterar</a></td>
        </tr>
        @endforeach
        
    </table>
    
</body>
</html> 
