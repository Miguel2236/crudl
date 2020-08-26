<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function nuevo()
    {
        // ver listado
        return view('categorias.nuevoCatalogo');
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
        // Guardar un registro
        DB::table('category_cataloge')->insert([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}