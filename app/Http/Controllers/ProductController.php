<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str; //Para poder hacer el slug del enlace.

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            // 'name' => 'required|min:3|unique:products,name' . $request->id, //Para que no se repita el nombre del producto.
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'image' => 'required|min:3',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $product = $request->user()->products()->create([
            'name'          => $name = $request->name,
            'slug'          => Str::slug($name),
            'description'   => $request->description,
            'image'         => $request->image,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'status'      => 1,
        ]); 

        return redirect()->route('products.edit', $product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'image' => 'required|min:3',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        
        $product->update([
            'name' => $name = $request->name,
            'slug' => Str::slug($name),
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status'      => 1,
        ]);
        return redirect()->route('products.edit', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
