<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proveedore;
use Illuminate\Http\Request;
use DB;
class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proveedores.index',[
            'proveedores'=> DB::select('select * from ListProveedores();')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $proveedor = new Proveedor();                                
                                   
        $proveedor->name = $request->get('name');
        $proveedor->direccion = $request->get('direccion');
        $proveedor->telefono = $request->get('telefono');
        $proveedor->ciudad= $ciudad->get('ciudad');
        $proveedor->email= $email->get('email');
        DB::select("select CreateProveedor('$proveedor->name','$proveedor->direccion','$proveedor->telefono', '$proveedor->ciudad', '$proveedor->email')");

        return redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idproveedor)
    {
        return view('proveedores.edit',[
            'proveedores'=> DB::select("select * from showProveedores('$idproveedor')")
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproveedor)
    {
        //
        $proveedor = new Proveedor();                                
                                   
        $proveedor->name = $request->get('name');
        $proveedor->direccion = $request->get('direccion');
        $proveedor->telefono = $request->get('telefono');
        $proveedor->ciudad= $ciudad->get('ciudad');
        $proveedor->email= $email->get('email');
        DB::select("select UpdateProveedor('$proveedor->name','$proveedor->direccion','$proveedor->telefono', '$proveedor->ciudad', '$proveedor->email')");

        return redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idproveedor)
    {
        //
        DB::select("select * from DeleteProveedor('$idproveedor')");
       return redirect('/proveedores');
    }
}

