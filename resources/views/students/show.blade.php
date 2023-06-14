@extends('students.layout')
@section('content')
<br>
<div class="row">
  <div class="col-2">
  </div>
  <div class="col">
    <div class="card text-bg-light">
      <div class="card-header text-center">
        <h3>Datos del estudiante</h3>
      </div>
      <div class="card-body">
        <p class="card-text">Nombre : {{ $students->nombre }}</p>
        <p class="card-text">Apellido : {{ $students->apellido }}</p>
        <p class="card-text">Celular : {{ $students->celular }}</p>
        <p class="card-text">Correo : {{ $students->correo }}</p>
      </div>
      <div class="text-center">
        <input type="button" value="Regresar" class="btn btn-danger btn-lg" onclick="history.back()">
      </div>
      <br>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>