<form id="formulario" action="/cursos/update" method="post">     
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name= "id" value="{{$curso->id}}">    
    <input type="text" name= "nome" value="{{$curso->nome}}">   
    <input type="text" name= "nome_reduzido" value="{{$curso->nome_reduzido}}">   
    <input type="submit" value="enviar">
</form>