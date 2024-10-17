
<html>
<body>
MODIFICA INFORMACIÓN DE ALUMNO
<form action = "{{route('editaralumno')}}" method= "POST">
{{ csrf_field() }}
<input type ='hidden' name='ida' value="{{$infoalu->ida}}">
<table border = 1>
<tr><td>

@if($errors->first('clave'))

{{$errors->first('clave')}}
@endif <br> 
Clave</td>
    <td><input type= 'text' name = 'clave' value="{{$infoalu->clave}}" readonly='readonly'></td>
<tr>
<tr><td>@if($errors->first('nombre'))
{{$errors->first('nombre')}}
@endif <br>
Nombre</td>
    <td><input type= 'text' name = 'nombre' value="{{$infoalu->nombre}}"></td>
<tr>
<tr><td>@if($errors->first('edad'))
{{$errors->first('edad')}}
@endif <br>
Edad</td>
    <td><input type= 'number' name = 'edad'  value="{{$infoalu->edad}}"></td>
<tr>
<tr><td>@if($errors->first('cp'))
{{$errors->first('cp')}}
@endif <br>
Codigo Postal</td>
    <td><input type= 'text' name = 'cp'  value="{{$infoalu->cp}}"></td>
<tr>
<tr><td>@if($errors->first('sexo'))
{{$errors->first('sexo')}}
@endif <br>Sexo</td>
    <td>
        @if($infoalu->sexo=='F')
        <input type="radio"  name="sexo" value="M" />Machin
        <input type="radio"  name="sexo" value="F" checked/>Femenino
        @else
        <input type="radio"  name="sexo" value="M" checked />Machin
        <input type="radio"  name="sexo" value="F" />Femenino
        @endif
    </td>
    <tr>
<tr><td>@if($errors->first('fecha'))
{{$errors->first('fecha')}}
@endif <br> Fecha Entrada</td>
    <td><input type = 'date' name = 'fecha' value="{{$infoalu->fecha}}"></td>
</tr>
<tr><td>@if($errors->first('carrera'))
{{$errors->first('carrera')}}
@endif <br> Carrera</td>
    <td><select name="idca">
        <option value ="{{$infoalu->idca}}">{{$infoalu->carre}}</option>
        @foreach($carreras as $c)
        <option value ="{{$c->idca}}">{{$c->nombre}}</option>
        @endforeach
        </select>
    </td>
<tr>
<tr>
    <td> @if($errors->first('descripcion'))
{{$errors->first('descripcion')}}
@endif <br> Descripcion</td>
    <td><textarea name = 'descripcion'>{{$infoalu->descripcion}}</textarea>
    </td>
</tr>
<tr><td colspan =  2 align = 'right'>
    <input type ='submit' value ='Guardar'></td</tr>
</table>
</form>

</body>
</html>