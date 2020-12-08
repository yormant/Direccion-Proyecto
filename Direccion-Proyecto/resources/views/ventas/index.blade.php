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
        <h1 class="text-center">Bienvenido al sistema de ventas..!</h1>
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
                <h3>Lista de ventas del sistema..!</h3>
             </div>
        </div>
        <form action="" method="post" >
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="text-right" id="buscar" name="buscar" placeholder="Buscar"/>
                    <button class="btn btn-primary text-left">Buscar</button>
                    
                </div>
                    
                    
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
                         <th>Producto</th>
                         <th>Vendedor</th>
                         <th>Cantidad Vendida</th>
                         <th>Precio_Unidad</th>
                         <th>Precio_Total</th>
                         
                     </thead>
                     <tbody>
                         @foreach ($ventas as $venta)
                         <tr>
                             <td>{{$venta->idproductosventas}}</td>
                             <td>
                                @foreach ($compras as $compra)
                                    @foreach ($productos as $producto)
                                    @if ($compra->idproducto==$producto->idproducto and $venta->idproductosventas==$compra->idcompra)
                                        {{$producto->name}}
                                    @endif                                 
                                    @endforeach                                
                                @endforeach  
                             </td>
                             <td>
                                @foreach ($compras as $compra)
                                @foreach ($vendedores as $vendedor)
                                @if ($compra->idvendedor==$vendedor->idvendedor and $venta->idproductosventas==$compra->idcompra)
                                    {{$vendedor->name}}
                                @endif                                 
                                @endforeach                                
                            @endforeach 
                             </td>
                            <td>{{$venta->cantidadvendida}}</td>
                             <td>
                                @foreach ($compras as $compra)
                                @foreach ($productos as $producto)
                                @if ($compra->idproducto==$producto->idproducto and $venta->idproductosventas==$compra->idcompra)
                                    {{$producto->precioproveedor}}
                                @endif                                 
                                @endforeach                                
                            @endforeach 
                             </td>
                             <td>{{$venta->totalventa}}</td>
                             
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection