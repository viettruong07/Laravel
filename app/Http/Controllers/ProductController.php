<?php
namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::simplePaginate(5);
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Products::create([
            'name' => $request->name,
            'color' => $request->color,
            'weight' => $request->weight,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('index');
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'color' => $request->color,
            'weight' => $request->weight,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('index');
    }
}
