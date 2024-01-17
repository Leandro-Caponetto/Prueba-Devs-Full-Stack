@extends('home')


@section('content')


<div
    class="row "
>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <hr>
        <h2>Lista de Usuarios</h2>
        <hr>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>
<div
class="table-responsive"
>
<br>
            <table
                class="table table-primary shadow"
            >
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr class="">
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellido}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td> <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->id}}">
  Editar
</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->id}}">
  Borrar
</button>

</td>
                    </tr>
                    @include('cliente.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('cliente.create')
    </div>
    <div class="col-md2"></div>
</div>




@endsection