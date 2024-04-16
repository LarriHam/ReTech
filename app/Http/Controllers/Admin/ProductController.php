<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Company;
use App\Models\Comment;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $rules = [
                'name' => 'required|string|min:10|max:1000',
                'summary' => 'required|string|min:2|max:10000000',
                'review' => 'required|string|min:2|max:1000',
                'rating' => 'required|string|min:2|max:1000',
                'price' => 'required|string|min:2|max:1000',
                'img' => 'required|string|min:2|max:1000',
                'category' => 'required|string|min:2|max:1000',
                'company_id' => 'required|exists:company,id',
            ];
    
            $product = new Product;
            $product->name = $request->name;
            $product->summary = $request->summary;
            $product->review = $request->review;
            $product->rating = $request->rating;
            $product->price = $request->price;
            $product->img = $request->img;
            $product->category = $request->category;
            $product->company_id = $request->company_id;
        
            $product->save();
    
            return redirect()
                ->route('admin.products.index')
                ->with('status', 'Created a new product!');
        
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.show')->with('product', $product);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation rules
        $rules = [

            'name' => 'required|string|min:10|max:1000',
            'summary' => 'required|string|min:2|max:10000000',
            'review' => 'required|string|min:2|max:1000',
            'rating' => 'required|string|min:2|max:1000',
            'price' => 'required|string|min:2|max:1000',
            'img' => 'required|string|min:2|max:1000',
            'category' => 'required|string|min:2|max:1000',
            'company_id' => 'required|exists:company,id',

        ];

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->summary = $request->summary;
        $product->review = $request->review;
        $product->rating = $request->rating;
        $product->price = $request->price;
        $product->img = $request->img;
        $product->category = $request->category;
        $product->company_id = $request->company_id;       

        $product->save();

        return redirect()->route('admin.products.index')->with('status', 'Updated product!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin.products.index')->with('status', 'Selected Product Deleted Successfully');
    }
}
