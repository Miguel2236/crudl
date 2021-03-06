<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Item;

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
        // $articulos = DB::table('items_cataloge')->get();
        $articulos = Item::all();
        return view('items.list', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         /**
         * nuevo articulo, retornar la lista de categorias
         */
        $cat = DB::table('category_cataloge')->get();
        return view('items.nuevo', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar un nuevo articulo

        $item = new Item();

        $item->name = $request->input('nombre');

        $item->stock = $request->input('stock');

        $item->price = $request->input('precio');

        $item->id_category = $request->input('categoria');

        $item->save();

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
        // $item = DB::table('items_cataloge')->where('id',$id)->first();
        $item = Item::find($id);
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
        $cat = DB::table('category_cataloge')->get();
        // return view('items.editar',compact('item'));
        return view('items.editar')->with('data', compact('item','cat'));
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
        // DB::table('items_cataloge')->where('id',$id)->update([
        //     "name" => $request->input('nombre'),
        //     "stock" => $request->input('stock'),
        //     "price" => $request->input('precio'),
        //     "id_category" => $request->input('categoria'),
        //     "updated_at" => Carbon::now(),
        // ]);

        $item = Item::find($id);

        $item->update($request->all());

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
        // DB::table('items_cataloge')->where('id',$id)->delete();
        Item::findOrFail($id)->delete();
        return redirect()->route('lista');
    }
}
