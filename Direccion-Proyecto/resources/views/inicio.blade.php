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
    <form action="" method="post" >
        <div class="row text-right">
            <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12 ">
                <input type="text" class="text-right" id="buscar" name="buscar" placeholder="Que quieres buscar?"/>
            </div>
                <button class="btn btn-primary text-left">Buscar</button>
        </div>
    </form>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
             <a href="/productos"><img src="/images/productos.png" width="100" height="100" ></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
            <a href="/inventarios"><img src="/images/inventario.png" width="100" height="100" ></a>
        </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
        <a href="/vendedores"><img src="/images/empleados.png" width="100" height="100" ></a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
             <a href=""><img src="/images/ventas.png" width="100" height="100" ></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
            <a href=""><img src="/images/proveedores.png" width="100" height="100" ></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
             <a href=""><img src="/images/compra.png" width="100" height="100" ></a>
        </div>
    </div>
    </div>
</div>
@endsection