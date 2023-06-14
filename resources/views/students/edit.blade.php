@extends('students.layout')
@section('content')
<br>
<div class="row">
  <div class="col-2">
  </div>
  <div class="col">
    <div class="card text-bg-light">
      <div class="card-header text-center">
        <h3>Actualizar la información del estudiante</h3>
      </div>
      <div class="card-body">
        <form action="{{ url('student/' .$students->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
          <label>Nombre</label><br>
          <input type="text" name="nombre" id="nombre" value="{{$students->nombre}}" class="form-control"><br>
          <label>Apellido</label><br>
          <input type="text" name="apellido" id="apellido" value="{{$students->apellido}}" class="form-control"><br>
          <label>Celular</label><br>
          <input type="text" name="celular" id="celular" value="{{$students->celular}}" class="form-control"><br>
          <label>Correo</label><br>
          <input type="text" name="correo" id="correo" value="{{$students->correo}}" class="form-control"><br>
          <div class="text-center">
            <input type="submit" value="Editar" class="btn btn-success btn-lg">
            <input type="button" value="Regresar" class="btn btn-danger btn-lg" onclick="history.back()">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div> 




@stop