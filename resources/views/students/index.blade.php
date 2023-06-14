@extends('students.layout')
@section('content')
<br>
<div class="row">
    <div class="col-2">
    </div>
    <div class="col">
    <div class="card text-bg-light">
        <div class="card-header text-center">
        <h3>Aplicación CRUD Estudiantes</h3>
        </div>
        <div class="card-body">
        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Nuevo estudiante">
            <i class="fa fa-plus" aria-hidden="true"></i>Nuevo
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Celular</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->apellido }}</td>
                        <td>{{ $item->celular }}</td>
                        <td>{{ $item->correo }}</td>
                        <td>
                            <a href="{{ url('/student/' . $item->id) }}" title="Ver"><button class="btn btn-info btn-sm">Ver</button></a>
                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Editar"><button class="btn btn-primary btn-sm">Editar</button></a>
                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Borrar" onclick="return confirm(&quot;Desea borrar este elemento?&quot;)">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <input type="button" value="Regresar" class="btn btn-danger btn-lg" onclick="history.back()">
        </div>
    </div>
</div>
</div>
<div class="col-2">
</div>
</div>
@endsection