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
        <h1>Recordatorio de contraseña.</h1>
        <form action="" method="post" >
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h3>Correo</h3></label>
                 <div class="col-sm-8">                        
                     <input type="text" class="form-control" id="correo" name="correo" placeholder="example@gmail.com"/>
                 </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
                    <a href="/index" class="btn btn-success">Back</a>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 justify-content-center">
                    <button class="btn btn-primary"> Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection