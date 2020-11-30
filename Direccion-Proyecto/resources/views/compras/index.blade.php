@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/icono.png" width="100" height="100" >
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
        
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
            <h1 class="text-center">Registro de Compras</h1>
        </div>
        </div>
    <br>
    <br>
    <form class="form-inline" action="/compras.store" method="POST">
    @csrf 

    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col"><h6>Id Producto:</h6></label>
        <div class="col-sm-4">                        
            <input type="text" class="form-control" id="idproducto" name="idproducto" />
        </div>
        <label for="inputName" class="col-sm-2 col"><h6>Cantidad :</h6></label>
        <div class="col-sm-4">                        
            <input type="text" class="form-control" id="cantidad" name="cantidad" />
        </div>
        <label for="inputName" class="col-sm-2 col"><h6>Vendedor :</h6></label>
        <div class="col-sm-4">                        
            <input type="text" class="form-control" id="idvendedor" name="idvendedor" />
        </div>
    </div>
        <div class="col-sm-3">
                <button class="btn btn-danger text-left" type="submit">Agregar</button> 
        </div>   
        

        
        
                              
            
   
    </form>    
    </div>
</div> 



@endsection