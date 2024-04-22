<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Company;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

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
        $category = [
            'phone', 'laptop', 'audio_device', 'games_console', 'tablet', 'tv', 'smartwatch', 'camera'
        ];
        return view('admin.products.create', [
            'category' => $category
        ]);
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
                'img' => 'file|image',
                'category' => 'required|string|min:2|max:1000',
                'company_id' => 'required|exists:company,id',
            ];
    
            $product = new Product;
            $product->name = $request->name;
            $product->summary = $request->summary;
            $product->review = $request->review;
            $product->rating = $request->rating;
            $product->price = $request->price;
            // $product->img = $request->img;
            $product->category = $request->category;
            $product->company_id = $request->company_id;
        
            //this stores the image
            if ($request->hasFile('img')) {               
                $img = $request->file('img');               
                $extension = $img->getClientOriginalExtension();
                $filename = date('Y-m-d-His') . '_' . $request->name . '.' . $extension;  
                $img->storeAs('public/images', $filename); 
                $product->img = $filename;
            }

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
        $category = [
            'phone', 'laptop', 'audio device', 'games console', 'tablet', 'tv', 'smartwatch', 'camera'
        ];

        $product = Product::findOrFail($id);
        return view('admin.products.edit', [
            'product' => $product,
            'category' => $category
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
            'img' => 'file|image',
            'category' => 'required|string|min:2|max:1000',
            'company_id' => 'required|exists:company,id',

        ];

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->summary = $request->summary;
        $product->review = $request->review;
        $product->rating = $request->rating;
        $product->price = $request->price;
        // $product->img = $request->img;
        $product->category = $request->category;
        $product->company_id = $request->company_id;       

        if ($request->hasFile('img')) {               
            $img = $request->file('img');               
            $extension = $img->getClientOriginalExtension();
            $filename = date('Y-m-d-His') . '_' . $request->name . '.' . $extension;  
            $img->storeAs('public/images', $filename);             

            if ($product->img) { // Delete old image
                Storage::delete('public/images/' . $product->img);
            }

            $product->img = $filename;
        }

        if ($request->hasFile('image')) { // Update the image!
            // Upload new image
            $newImage = $request->file('image');
            $filename = date('Y-m-d-His') . '_' . $request->name . '.' . $newImage->getClientOriginalExtension();
            $newImage->storeAs('public/images/', $filename);
          
            

            $storysection->image = $filename;
        }

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
