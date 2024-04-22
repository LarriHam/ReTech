@extends('layouts.ordinary_user')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Comments') }}
</h2>
@endsection

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Text
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    User
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comments as $comment)
            
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$comment->text}}
                </th>
                <td class="px-6 py-4">
                    {{$comment->date}}
                </td>           
                <td class="px-6 py-4">
                    {{$comment->user->name}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('ordinary_user.comments.show', $comment->id)}}">Read More</a></a>
                </td>
            </tr>

            @empty
            <h4>No comments found</h4>
        @endforelse
            
        </tbody>
    </table>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{route('ordinary_user.comments.create')}}">Create</a></button>
</div>

@endsection