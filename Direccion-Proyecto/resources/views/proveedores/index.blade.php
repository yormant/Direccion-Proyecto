@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/celular.png" width="100" height="100" >
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
        <h1 class="text-center">Bienvenido al sistema de inventario..!</h1>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
       <a href="/index" class="btn btn-success">Salir</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
    <div class="row">
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 p-3 mb-2 bg-info text-white text-center">
                <h3>Lista de Proveedores del sistema..!</h3>
             </div>
        </div>
        <form action="" method="post" >
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="text-right" id="buscar" name="buscar" placeholder="Buscar"/>
                    <button class="btn btn-primary text-left">Buscar</button>
                    
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
                    <a href="/proveedores/create"class="btn btn-primary">Nuevo</a>
                    <a href="/inicio"class="btn btn-secondary">Regresar</a>
                </div>
             </div>
        </form>
        <br>
        <br>
        <div class="row">
             <div class="col">
                 <table class="table table-bordered table-striped">
                     <thead>
                     <th>Id</th>
                         <th>Nombre de la empresa</th>
                         <th>NIT</th>
                         <th>Direccion de la empresa</th>
                         <th>Telefono</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </thead>
                     <tbody>
                         @foreach ($proveedores as $proveedore)
                         <tr>
                                <td>{{$proveedore->id}}</td>
                                <td>{{$proveedore->nombreEmpresa}}</td>
                                <td>{{$proveedore->nit}}</td>
                                <td>{{$proveedore->direccion}}</td>
                                <td>{{$proveedore->telefono}}</td>
                             <td>
                                <a class="btn btn-success" href="/proveedores/{{$proveedore->id}}/edit">Editar</a>
                             </td>
                             <td>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection