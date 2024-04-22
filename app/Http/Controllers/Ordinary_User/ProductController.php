<?php

namespace App\Http\Controllers\Ordinary_user;

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

        return view('ordinary_user.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('ordinary_user.products.show')->with('product', $product);
        

    }

    
}
