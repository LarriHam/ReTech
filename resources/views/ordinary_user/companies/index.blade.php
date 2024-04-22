@extends('layouts.ordinary_user')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Companies') }}
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
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Company Info
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($companies as $company)
            
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$company->name}}
                </th>
                <td class="px-6 py-4">
                    {{$company->phone_no}}
                </td>
                <td class="px-6 py-4">
                    {{$company->company_info}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('ordinary_user.companies.show', $company->id)}}">Read More</a></a>
                </td>
            </tr>

            @empty
            <h4>No companies found</h4>
        @endforelse
            
        </tbody>
    </table>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{route('ordinary_user.companies.create')}}">Create</a></button>
</div>

@endsection