<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //inicio
        return view('index');
    }

    public function list()
    {
        // ver listado
        $articulos = DB::table('items_cataloge')->get();
        return view('items.list', compact('articulos'));
    }

    public function newItem()
    {
        // NUEVO ARTICULO 
        return view('items.nuevo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // return 'Datos Enviadoss';
        // return $request->all();
        DB::table('items_cataloge')->insert([
            "name" => $request->input('nombre'),
            "stock" => $request->input('stock'),
            "price" => $request->input('precio'),
            "id_category" => $request->input('categoria'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar info de in producto
        $item = DB::table('items_cataloge')->where('id',$id)->first();
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // abrir la vista para editar
        $item = DB::table('items_cataloge')->where('id',$id)->first();
        return view('items.editar',compact('item'));
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
        //actualizar
        DB::table('items_cataloge')->where('id',$id)->update([
            "name" => $request->input('nombre'),
            "stock" => $request->input('stock'),
            "price" => $request->input('precio'),
            "id_category" => $request->input('categoria'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('lista');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // eliminar un registro
        return "Ejemplo";
        // DB::table('items_cataloge')->where('id',$id)->delete();

        // return redirect()->route('lista');
    }
}
