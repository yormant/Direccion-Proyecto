@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/editar.png" width="100" height="100" >
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
        <h1 class="text-center">COMPRAS DEL SISTEMA</h1>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
       <a href="/compras" class="btn btn-danger">Salir</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 p-3 mb-2 bg-danger text-black text-center">
            <h3>Edita las Compras</h3>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <a href="/compras"class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <br>
        <br>
        <form action="/compras/{{$compra->id}}" method="POST">
        @csrf
        @method('PUT')
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Producto</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="producto" name="producto" placeholder="Id" value="{{old('producto', $compra->producto)}}" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Cantidad</h5></label>
                 <div class="col-sm-4">                        
                     <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad"  value="{{old('cantidad', $compra->cantidad)}}"/>
                 </div>
             </div> 
             <br>
             <br>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Precio Unidad</h5></label>
                 <div class="col-sm-4">                        
                     <input type="number" class="form-control" id="precio_unidad" name="precio_unidad" placeholder="Precio_unidad" value="{{old('precio_unidad', $compra->precio_unidad)}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Precio Total</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="precio_total" name="precio_total" placeholder="Precio_total"  value="{{old('precio_total', $compra->precio_total)}}" />
                 </div>
                   
             </div> 
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-danger">Editar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection