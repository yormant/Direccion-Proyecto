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
            <h3>Edita los Inventarios del Sistema..!</h3>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <a href="/inventarios"class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <br>
        <br>
        <form action="" method="post" >
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h3>Id:</h3></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="id" name="id" placeholder="Id" value="{{$inventario->id}}" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h3>Nombre:</h3></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"  value="{{$inventario->nombre}}"/>
                 </div>
             </div> 
             <br>
             <br>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h3>Precio Venta:</h3></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="{{$inventario->precio_venta}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h3>Cantidad Total:</h3></label>
                 <div class="col-sm-4">                        
                     <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Total"  value="{{$inventario->precio}}" />
                 </div>
             </div> 
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="button" class="btn btn-info">Editar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection