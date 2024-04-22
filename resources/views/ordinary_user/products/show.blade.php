@extends('layouts.ordinary_user')

@section('content')
<div class="px-4 py-4">
    <div>
        <h2 class="text-2xl font-extrabold dark:text-white">Show Product</h2>
    </div>

    <img width="150" src={{ asset("storage/images/" . $product->img) }} />

    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->name}}" disabled>
    </div>
    <div class="mb-6">
        <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summary</label>
        <textarea id="summary" name="summary" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ $product->summary }}</textarea>

    </div>
    <div class="mb-6">
        <label for="review" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review</label>
        <textarea id="review" name="review" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ $product->review }}</textarea>
   
    </div>
    <div class="mb-6">
        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
        <input type="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->rating}}" disabled>
    </div>
    <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
        <input type="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->price}}" disabled>
    </div>
    <div class="mb-6">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <input type="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->category}}" disabled>
    </div>
    <div class="mb-6">
        <label for="company_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
        <input type="company_id" id="company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->company->name}}" disabled>
    </div>

    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{route('ordinary_user.products.edit', $product->id)}}">Edit</a></button>
    
    <form method="POST" action="{{ route('ordinary_user.products.destroy', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </form>

</div>
@endsection
