<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasPermissionTo('view categories')) {
            $categories = Category::with('movie')->get();
            return view('categories.index',compact('categories'));
        } else {
            return view('index');
        }
        
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
        if(Auth::user()->hasPermissionTo('add categories')) {
            if($category = Category::create($request->all())) {
                return redirect()->back()->with('success','El registro se ha creado correctamente');
            }
            return redirect()->back()->with('error','No se pudo crear el registro correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(Auth::user()->hasPermissionTo('update categories')) {
            $category = Category::find($request['id']);
            if ($category) {
                if ($category->update($request->all())) {
                    return redirect()->back()->with('success','El registro se ha actualizado correctamente');
                }
            }
            return redirect()->back()->with('error','No se pudo actualizar el registro correctamente');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(Auth::user()->hasPermissionTo('delete categories')) {
            $category = Category::find($request['id']);
            if($category){
                if ($category->delete()) {
                    return response()->json([
                        'message' => 'Registro eliminado correctamente',
                        'code' => '200',
                    ]);
                }
            }
            return response()->json([
                'message' => 'No se pudo eliminar el registro',
                'code' => '400',
            ]);
        }
    }
}
