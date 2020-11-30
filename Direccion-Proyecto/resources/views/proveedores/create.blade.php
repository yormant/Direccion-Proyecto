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
                <h3>Agrega Proveedores al Sistema..!</h3>
             </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/proveedores"class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <br>
        <br>
        <form action="/proveedores" method="POST" >
            @csrf

            <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre de la empresa:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="name" name="name" />
                 </div>
                 
                 <label for="inputName" class="col-sm-2 col"><h5>Direccion:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="text" class="form-control" id="direccion" name="direccion"  />
                 </div>
                 
             </div> 
             <div class="form-group row">

                <label for="inputName" class="col-sm-2 col"><h5>Telefono:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="text" class="form-control" id="telefono" name="telefono"  />
                 </div>
                <label for="inputName" class="col-sm-2 col"><h5>Ciudad:</h5></label>
                <div class="col-sm-4">                        
                    <input type="text" class="form-control" id="ciudad" name="ciudad" />
                </div>
             </div> 
             <div class="form-group row">
                
                <label for="inputName" class="col-sm-2 col"><h5>Email:</h5></label>
                <div class="col-sm-4">                        
                    <input type="text" class="form-control" id="email" name="email" />
                </div>
                <label for="inputName" class="col-sm-2 col"><h5>Catidad Total Recibida:</h5></label>
                <div class="col-sm-4">                        
                    <input type="number" class="form-control" id="cantidadtotal" name="cantidadtotal" />
                </div>
             </div> 
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Agregar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection