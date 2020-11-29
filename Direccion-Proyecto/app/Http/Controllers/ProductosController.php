<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos.index',[
            'productos'=> DB::select('select * from ListProductos()'),
            'marcas'=>DB::select('select * from ListMarcas()')
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
        $producto = new Producto();        
        $producto->name = $request->get('name');
        $producto->precioproveedor = $request->get('precioproveedor');
        $producto->idmarca = $idmarca->get('idmarca');
        DB::select("select createproducto('$producto->name','$producto->precioproveedor',$producto->idmarca)");

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         return view('productos.show');
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idproducto)
    {
        
        return view('productos.edit',[
            'productos'=> DB::select("select * from ShowAProduct('$idproducto')"),
            'marcas'=>DB::select('select * from ListMarcas()')
        ]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproducto)
    {
        //
        $producto = new Producto();
        $producto->idproducto = $idproducto;
        $producto->name = $request->get('name');
        $producto->precioproveedor = $request->get('precioproveedor');
        DB::select("select updateProducto($producto->idproducto,
        '$producto->name','$producto->precioproveedor'
        )");

        return redirect('/productos');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idproducto)
    { 
        
       // $producto->delete();
       
       DB::select("select * from DeleteProductos('$idproducto')");
       return redirect('/productos');
    }
    public function search()
    {
        //
        $buscar 				= $_POST['buscar'];
        return view('productos.search',[
            'productos'=> DB::select("select * from ShowAProduct('$buscar')"),
            'marcas'=>DB::select('select * from ListMarcas()')
        ]);
    }
}
