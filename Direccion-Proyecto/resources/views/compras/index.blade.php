@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/icono.png" width="100" height="100" >
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
        <h1 class="text-center">Registro de Compras</h1>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
       <a href="/compras" class="btn btn-danger">Salir</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
    <div class="row text-center">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 p-3 mb-2 bg-danger text-black text-center">
            <h3>Lista de Compras del Sistema</h3>
        </div>
    </div>
    <br>
    <br>
    <form class="form-inline" action="/compras" method="POST">
    @csrf 
  <div class="form-group-8">
    <label for="producto">Producto</label>
    <input type="producto" style=margin-left:50px; class="form-control" id="producto" name="producto">
  </div>
  <div class="form-group-8">
    <label for="cantidad">Cantidad</label>
    <input type="cantidad" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="form-group-8">
    <label for="precio_unidad">Precio Unidad</label>
    <input type="precio_unidad" class="form-control" id="precio_unidad" name="precio_unidad">
    </div>
    <div class="form-group-8">
    <label for="precio_total">Precio total</label>
    <input type="precio_total" class="form-control" id="precio_total" name="precio_total">
    <button class="btn btn-danger text-left">Agregar</button>
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
                         <th>Cantidad</th>
                         <th>Precio por unidad</th>
                         <th>Precio Total</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </thead>
                     <tbody>
                         @foreach ($compras as $compra)
                         <tr>
                             <td>{{$compra->id}}</td>
                             <td>{{$compra->producto}}</td>
                             <td>{{$compra->cantidad}}</td>
                             <td>{{$compra->precio_unidad }}</td>
                             <td>{{$compra->precio_total }}</td>
                             <td>
                             <a class="btn btn-success" href="/compras/{{$compra->id}}/edit">Editar</a>
                             </td>
                             <td>
                                    <form action="{{route('compras.destroy', $compra)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input
                                        type="submit"
                                        class="btn btn-danger"
                                        value="Delete"
                                        onclick="return confirm('Está seguro que desea eliminar la compra?')"
                                        />
                                    </form>
                                </td>
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection