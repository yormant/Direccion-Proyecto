@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/celular.png" width="100" height="100" >
    </div>
    <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
        <h1 class="text-center">Bienvenido al sistema de inventario..!</h1>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
    
        <form action="" method="post" >
            <div class="form-group row">
                <label for="staticDocument" class="col-sm-2 col"><h3>Rol</h3></label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Seleccionar Rol..</option>
                        <option>Administrador</option>
                        <option>Vendedor</option>
                      </select>
                 </div>
            </div>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h3>Usuario:</h3></label>
                 <div class="col-sm-10">                        
                     <input type="text" class="form-control" id="usuario" name="usuario" placeholder="example@gmail.com"/>
                 </div>
             </div>  
             <div class="form-group row">
                 <label for="inputLastName" class="col-sm-2 col"><h3>Contraseña:</h3></label>
                <div class="col-sm-10">
                     <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="*******"/>
                </div>
            </div>  
             <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
                     <a href="/recordar"  class="center-block">Olvido su contraseña?</a>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <a class="btn btn-primary center-block" href="/inicio" role="button">Iniciar Sesión</a>
                </div>
            </div>
        </form>
     </div>
</div>

@endsection