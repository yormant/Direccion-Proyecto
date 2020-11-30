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
                <h3>Edita los Empleados del Sistema..!</h3>
             </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/vendedores"class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <br>
        <br>
        @foreach ($vendedores as $vendedor)
    <form action="/vendedores/{{$vendedor->idvendedor}}" method="POST" >
        @csrf
        @method('put')   
        
        <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="name" name="name"  value="{{old('name',$vendedor->name)}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Apellidos:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="text" class="form-control" id="lastname" name="lastname"  value="{{old('lastname',$vendedor->lastname)}}"/>
                 </div>
             </div> 
             <br>
             <br>
             <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Usuario:</h5></label>
                <div class="col-sm-4">                        
                    <input type="text" class="form-control" id="usuario" name="usuario"  value="{{$vendedor->usuario}}" />
                </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Password:</h5></label>
                 <div class="col-sm-4">                        
                     <input type="password" class="form-control" id="password" name="password" readonly="readonly" value="{{$vendedor->password}}" />
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