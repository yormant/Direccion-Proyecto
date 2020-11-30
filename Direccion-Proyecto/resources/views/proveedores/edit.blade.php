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
       <a href="/inicio" class="btn btn-success">Salir</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
    <div class="row">
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 p-3 mb-2 bg-info text-white text-center">
                <h3>Edita los Proveedores del Sistema..!</h3>
             </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/proveedores"class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <br>
        <br>
        @foreach ($proveedores as $proveedor)
        <form action="/proveedores/{{$proveedor->idproveedor}}" method="POST" >
            @csrf
            @method('put')
           
             <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h3>Id  Del Proveedor</h3></label>
                <div class="col-sm-4">                        
                    <input type="text" class="form-control" id="idproveedor" name="idproveedor" value="{{old('idproveedor',$proveedor->idproveedor)}}"/>
                    
                </div>

                 <label for="inputName" class="col-sm-2 col"><h5>Nombre de la empresa:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="name" name="name"  value="{{old('name',$proveedor->name)}}"/>
                 </div>
                 
                 
             </div> 
             <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Direccion:</h5></label>
                <div class="col-sm-2">                        
                    <input type="text" class="form-control" id="direccion" name="direccion"  value="{{old('direccion',$proveedor->direccion)}}" />
                </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Telefono:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="text" class="form-control" id="telefono" name="telefono"  value="{{old('telefono',$proveedor->telefono)}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Ciudad:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="text" class="form-control" id="ciudad" name="ciudad"  value="{{old('ciudad',$proveedor->ciudad)}}"/>
                 </div>
                 
             </div> 
             <div class="form-group row">
                
                 
                 <label for="inputName" class="col-sm-2 col"><h5>Email:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="email" name="email"  value="{{old('email',$proveedor->email)}}" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Cantidad Total Recibida:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="number" class="form-control" id="cantidadtotal" name="cantidadtotal"  value="{{old('email',$proveedor->cantidadtotal)}}" />
                 </div>
             </div> 

             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Editar</button>
                </div>
             </div>
        </form>
        @endforeach
    </div>
</div>
@endsection