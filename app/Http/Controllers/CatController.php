<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Category;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list()
    {
        // ver listado
        $catalogos = DB::table('category_cataloge')->get();
        return view('categorias.cat_list', compact('catalogos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // nueva categoria
        return view('categorias.nuevoCatalogo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Guardar un registro
        Category::create($request->all());

        return redirect()->route('categorias.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // mostrar una categoria
        $cat = DB::table('category_cataloge')->where('id',$id)->first();
        return view('categorias.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // obtener un registro
        $cat = DB::table('category_cataloge')->where('id',$id)->first();
        return view('categorias.editar', compact('cat'));
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
        // actualizar un registro
        DB::table('category_cataloge')->where('id',$id)->update([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('categorias.listar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar un registro
        DB::table('category_cataloge')->where('id',$id)->delete();
        return redirect()->route('categorias.listar');
    }
}
