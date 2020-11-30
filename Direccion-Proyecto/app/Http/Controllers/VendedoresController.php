<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedore;
use DB;
class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendedores.index',[
            'vendedores'=> DB::select('select * from  ListVendedores();')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedores.create');
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
        $vendedor = new Vendedore;
        $vendedor->name = $request->get('name');
        $vendedor->lastname = $request->get('lastname');
        $vendedor->usuario = $request->get('usuario');
        $vendedor->password= $request->get('password');
         DB::select("select CreateVendedor('$vendedor->name','$vendedor->lastname','$vendedor->usuario', '$vendedor->password')");

        return redirect('/vendedores');
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
    public function edit($idvendedor)
    {
        return view('vendedores.edit',[
            'vendedores'=> DB::select("select * from showVendedores('$idvendedor')")
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idvendedor)
    {
        //
        $vendedor = new Vendedore;
        $vendedor->idvendedor =$idvendedor;
        $vendedor->name = $request->get('name');
        $vendedor->lastname = $request->get('lastname');
        $vendedor->usuario = $request->get('usuario');
        $vendedor->password= $request->get('password');
         DB::select("select UpdateVendedor('$vendedor->idvendedor','$vendedor->name','$vendedor->lastname','$vendedor->usuario', '$vendedor->password')");

        return redirect('/vendedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvendedor)
    {
        //
        DB::select("select * from DeleteVendedores('$idvendedor')");
        return redirect('/vendedores');
    }
}
