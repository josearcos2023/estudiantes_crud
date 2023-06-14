@extends('students.layout')
@section('content')
<br>
<div class="row">
  <div class="col-2">
  </div>
  <div class="col">
    <div class="card text-bg-light">
      <div class="card-header text-center">
        <h3>Ingresar la información del estudiante</h3>
      </div>
      <div class="card-body">
          <form action="{{ url('student') }}" method="post">
            {!! csrf_field() !!}
            <br>
            <div class="form-floating">
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" autocomplete="off"><br>
              <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating">
              <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" autocomplete="off"><br>
              <label for="apellido">Apellido</label>
            </div>
            <div class="form-floating">
              <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" autocomplete="off"><br>
              <label for="celular">Celular</label>
            </div>
            <div class="form-floating">
              <input type="mail" name="correo" id="correo" class="form-control" placeholder="Correo" autocomplete="off"><br>
              <label for="correo">Correo</label>
            </div>
            <div class="text-center">
              <input type="submit" value="Grabar" class="btn btn-success btn-lg">
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