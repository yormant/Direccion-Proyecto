<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compras.index',[
            'compras'=> Compra::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compra = new Compra();
        $compra->producto = $request->get('producto');
        $compra->cantidad = $request->get('cantidad');
        $compra->precio_unidad= $request->get('precio_unidad');
        $compra->precio_total = $request->get('precio_total');
        $compra->save();
        //Redireccionar a la página que lista los objetivos
        return redirect('/compras');
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
    public function edit($id)
    {
        $compra = Compra::find($id);
        return view('compras.edit',[
            'compra'=> $compra
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $compra = Compra::find($id); //Traer recurso desde la BD
        
        $compra->producto = $request->get('producto');
        $compra->cantidad = $request->get('cantidad');
        $compra->precio_unidad = $request->get('precio_unidad');
        $compra->precio_total= $request->get('precio_total');
        $compra->save();
        //Redireccionar a la página que lista los objetivos
        return redirect('/compras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        public function destroy(Compra $compra)
    {
        $compra->delete();
        return back();
    }
    
}
