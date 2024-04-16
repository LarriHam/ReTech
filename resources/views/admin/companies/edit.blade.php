@extends('layouts.admin')

@section('content')

<div class="px-4 py-4">
    <h3 class="text-2xl font-extrabold dark:text-white">Edit Company</h3>

    <form action="{{route('admin.companies.update', $company->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('name') ? : $company->name }}"/>
            @if($errors->has('name'))
            <span class="text-red-500">{{$errors->first('name')}}</span>
            @endif
        </div>
        <div>
            <label for="phone_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
            <input type="text" name="phone_no" id="phone_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('phone_no') ? : $company->phone_no }}"/>
            @if($errors->has('phone_no'))
            <span class="text-red-500">{{$errors->first('phone_no')}}</span>
            @endif
        </div>
        <div>
            <label for="company_info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Info</label>
            <input type="text" name="company_info" id="company_info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('company_info') ? : $company->company_info }}"/>
            @if($errors->has('company_info'))
            <span class="text-red-500">{{$errors->first('company_info')}}</span>
            @endif
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a></button>
    </form>
</div>
@endsection