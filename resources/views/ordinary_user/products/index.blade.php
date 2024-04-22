@extends('layouts.ordinary_user')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Products') }}
</h2>
@endsection

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Summary
                </th>
                <th scope="col" class="px-6 py-3">
                    Review
                </th>
                <th scope="col" class="px-6 py-3">
                    Rating
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$product->name}}
                </th>
                <td class="px-6 py-4">
                    {{$product->summary}}
                </td>
                <td class="px-6 py-4">
                    {{$product->review}}
                </td>
                <td class="px-6 py-4">
                    {{$product->rating}}
                </td>
                <td class="px-6 py-4">
                    {{$product->price}}
                </td>
                <td class="px-6 py-4">
                    {{$product->category}}
                </td>              
                <td class="px-6 py-4">
                    {{$product->company->name}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('ordinary_user.products.show', $product->id)}}">Read More</a></a>
                </td>
            </tr>

            @empty
            <h4>No products found</h4>
        @endforelse
            
        </tbody>
    </table>
    
</div>

@endsection