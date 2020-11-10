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
                <h3>Agrega Empleados al Sistema..!</h3>
             </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/vendedores"class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <br>
        <br>
        <form action="" method="post" >
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Apellidos:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" />
                 </div>
             </div> 
             <br>
             <br>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Tipo Documento:</h5></label>
                 <div class="col-sm-4">                        
                 <select class="form-control">
                        <option>Tipo Documenyo..</option>
                        <option>Tajeta Identidad</option>
                        <option>Cedula</option>
                      </select>
                 </div>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>N° Documento:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="number" class="form-control" id="precio" name="precio" placeholder="Solo números" />
                 </div>
             </div> 
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Correo:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="text" class="form-control" id="correo" name="correo" placeholder="example@gamil.com"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Usuario:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="number" class="form-control" id="usuario" name="usuario" placeholder="example" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Contraseña:</h5></label>
                 <div class="col-sm-2">                        
                     <input type="number" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" />
                 </div>
             </div> 
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="button" class="btn btn-info">Agregar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection