extends('layouts.base')
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
            <h3>Lista de Inventarios del Sistema..!</h3>
        </div>
    </div>
         <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
             <a href="/inventarios/index"class="btn btn-secondary">Regresar</a>
         </div>
         
        <br>
        <br>
        <div class="row">
             <div class="col">
                 <table class="table table-bordered table-striped">
                     <thead>
                        <th>Id</th>
                        <th>Producto</th>
                        <th>Cantidad_Vendida</th>
                        <th>Cantidad_Restante</th>
                        <th>Precio_Unidad</th>
                        <th>Precio_Total</th>
                        <th>Ganacias_Ventas</th>
                     </thead>
                     <tbody>
                         @foreach ($ventas as $venta)
                         <tr>
                            <td>{{$venta->id}}</td>
                            <td>{{$venta->Producto}}</td>
                            <td>{{$venta->Cantidad_Vendida}}</td>
                            <td>{{$venta->Cantidad_Restante}}</td>
                            <td>{{$venta->Precio_Unidad}}</td>
                            <td>{{$venta->Precio_Total}}</td>
                            <td>{{$venta->Ganacias_Ventas}}</td>
                             <td>
                                <a class="btn btn-success" href="/inventarios/{{$inventario->id}}/edit">Editar</a>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection