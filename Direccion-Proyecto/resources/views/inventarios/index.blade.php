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
    <div class="row text-center">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 p-3 mb-2 bg-info text-white text-center">
            <h3>Lista de Inventarios del Sistema..!</h3>
        </div>
    </div>
        <form action="" method="post" >
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="text-right" id="buscar" name="buscar" placeholder="Buscar"/>
                    <button class="btn btn-primary text-left">Buscar</button>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
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
                         <th>Precio Venta</th>
                         <th>Precio Proveedor</th>
                         <th>Cantidad Vendida</th>
                         <th>Cantidad restante</th>
                     </thead>
                     <tbody>
                         @foreach ($inventarios as $inventario)
                         <tr>
                            <td>{{$inventario->idproductosproveedores}}</td>
                            <td>
                               @foreach ($productos as $producto)
                                @if ($inventario->idproducto==$producto->idproducto)
                                    {{$producto->name}}
                                @endif                                 
                                @endforeach 
                            </td>
                            <td>
                                @foreach ($productos as $producto)
                                @foreach ($marcas as $marca)
                                    @if ($producto->idmarca==$marca->idmarca and $inventario->idproducto==$producto->idproducto)
                                        {{$marca->name}}
                                    @endif                                 
                                @endforeach 
                            @endforeach
                            </td>
                            <td>
                                @foreach ($productos as $producto)
                                @if ($inventario->idproducto==$producto->idproducto)
                                    {{$producto->precioproveedor}}
                                @endif                                 
                                @endforeach 
                            </td>
                            <td>{{$inventario->precioproveedor}}</td>
                             <td>{{$inventario->montovendido}}</td>
                             @foreach ($proveedores as $proveedor)
                                @if ($inventario->idproveedor==$proveedor->idproveedor)
                                    <td>{{$proveedor->cantidadtotal}}</td>
                                @endif                                 
                            @endforeach                            
                             
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection