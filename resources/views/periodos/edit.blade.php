<form id="formulario" action="/periodos/update" method="post">     
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name= "id" value="{{$periodo->id}}">    
    <input type="number" name= "ano" value="{{$periodo->ano}}">    
    <input type="date" name= "dt_inicio"  value="{{$periodo->dt_inicio}}"> 
    <input type="date" name= "dt_fim"  value="{{$periodo->dt_fim}}">
    <input type="submit" value="enviar">
</form>
