@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="inicio" >
        <img src="/images/celular.png" width="100" height="100" >
        </a>
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
                <h3>Lista de Empleados del sistema..!</h3>
             </div>
        </div>
        <form action="" method="post" >
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="text-right" id="buscar" name="buscar" placeholder="Buscar"/>
                    <button class="btn btn-primary text-left">Buscar</button>
                    
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
                    <a href="/vendedores/create"class="btn btn-primary">Nuevo</a>
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
                         <th>Nombre</th>
                         <th>Apellido</th>
                         <th>Usuario</th>
                         <th type="password">Contraseña</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </thead>
                     <tbody>
                         @foreach ($vendedores as $vendedor)
                         <tr>
                             <td>{{$vendedor->idvendedor}}</td>
                             <td>{{$vendedor->name}}</td>
                             <td>{{$vendedor->lastname}}</td>
                             <td>{{$vendedor->usuario}}</td>
                            <td><input class="form-control" type="password" name="password" id="password" value="{{$vendedor->password}}"></td>
                             <td>
                                <a class="btn btn-success" href="/vendedores/{{$vendedor->idvendedor}}/edit">Editar</a>
                             </td>
                             <td>
                                <form action="{{route('vendedores.destroy',$vendedor->idvendedor)}}" method="POST">
                                    @csrf
                                    @method('DELETE')                                    
                                    <input 
                                    type="submit"
                                    class="btn btn-danger"
                                    value="Delete"
                                    onclick="return confirm('¿Esta seguro que quiere eliminar Este Vendedor?')">
                                    </form>
                            </td>
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection