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
                <h3>Lista de Prodcutos del Sistema..!</h3>
             </div>
        </div>
        <form action="" method="post" >
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="text-right" id="buscar" name="buscar" placeholder="Buscar por ID"/>
                    <button href="/productos/search" class="btn btn-primary text-left">Buscar</button>
                
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
                    <a href="/productos/create"class="btn btn-primary">Agregar</a>
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
                         <th>Marca</th>
                         <th>Precio</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </thead>
                     <tbody>
                         @foreach ($productos as $producto)
                         <tr>
                             <td>{{$producto->idproducto}}</td>
                             <td>{{$producto->name}}</td>
                             @foreach ($marcas as $marca)
                                @if ($producto->idmarca==$marca->idmarca)
                                    <td>{{$marca->name}}</td>
                                @endif                                 
                             @endforeach                             
                             <td>{{$producto->precioproveedor}}</td>
                             <td>
                                <a class="btn btn-success" href="/productos/{{$producto->idproducto}}/edit">Editar</a>
                             </td>
                             <td>
                                <form action="{{route('productos.destroy',$producto->idproducto)}}" method="POST">
                                    @csrf
                                    @method('DELETE')                                    
                                    <input 
                                    type="submit"
                                    class="btn btn-danger"
                                    value="Delete"
                                    onclick="return confirm('¿Esta seguro que quiere eliminar El Producto ?')">
                                    </form>
                            </td>
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection