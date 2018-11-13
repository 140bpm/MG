<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products= Products::all();


        if ($request->is('admin/cars')) {
            return view ('admin.cars.index',compact('products'))->with(["products"=>$products]);
        }

        if ($request->is('admin/motorcycles')) {
            return view ('admin.motorcycles.index',compact('products'))->with(["products"=>$products]);
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
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'precio'=> 'required',
            'tipo'=> 'required',
            'modelo' => 'required',
            'descripcion' => 'required|max:100'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio'
        ]);


        Products::create([
            'productname' => $request->nombre,
            'brand' => $request->marca,
            'price' => $request->precio,
            'type' => $request->tipo,
            'model' => $request->modelo,
            'productdescription' => $request->descripcion
        ]);
        $products= Products::all();

        return redirect()->back();
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
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)

    {

        Products::where('id',$id)->update([
            'productname' => $request->nombre,
            'price' => $request->price,
            'brand' => $request->marca,
            'type' => $request->tipo,
            'model' => $request->modelo,
            'productdescription' => $request->descripcion
        ]);

        $products= Products::all();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where('id',$id)->delete();

        $products= Products::all();

        return redirect()->back();
    }
}
