@extends('layouts.admin')

@section('content')
<div class="px-4 py-4">
    <div>
        <h2 class="text-2xl font-extrabold dark:text-white">Show Product</h2>
    </div>

    <img width="150" src={{ asset("storage/images/" . $products->images) }} />

    <div class="mb-6">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->name}}" disabled>
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summary</label>
        <input type="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->summary}}" disabled>
    </div>
    <div class="mb-6">
        <label for="review" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review</label>
        <input type="review" id="review" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->review}}" disabled>
    </div>
    <div class="mb-6">
        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
        <input type="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->rating}}" disabled>
    </div>
    <div class="mb-6">
        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
        <input type="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->price}}" disabled>
    </div>
    <div class="mb-6">
        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
        <input type="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->img}}" disabled>
    </div>
    <div class="mb-6">
        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <input type="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->category}}" disabled>
    </div>
    <div class="mb-6">
        <label for="studio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Studio</label>
        <input type="studio" id="studio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$movie->studio->name}}" disabled>
    </div>

    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{route('admin.product.edit', $product->id)}}">Edit</a></button>
    
    <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </form>

</div>
@endsection
