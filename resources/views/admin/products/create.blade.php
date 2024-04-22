@extends('layouts.admin')

@section('content')

<div class="px-4 py-4">
    <h3 class="text-2xl font-extrabold dark:text-white">Create Product</h3>

    <form enctype="multipart/form-data" action="{{route('admin.products.store')}}" method="post">
        @csrf
        @method('post')

        <input type="file" name="img" placeholder="img image" class="w-full mt-6" field="img"/>

        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('name')}}"/>
            @if($errors->has('name'))
            <span class="text-red-500">{{$errors->first('name')}}</span>
            @endif
        </div>
        <div>
            <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summary</label>
            <textarea id="summary" name="summary" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ old('summary')}}</textarea>
            @if($errors->has('summary'))
            <span class="text-red-500">{{$errors->first('summary')}}</span>
            @endif
        </div>
        <div>
            <label for="review" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review</label>
            <textarea id="review" name="review" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ old('review') }}</textarea>
            @if($errors->has('review'))
            <span class="text-red-500">{{$errors->first('review')}}</span>
            @endif
        </div>
        <div>
            <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
            <input type="text" name="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('rating') }}"/>
            @if($errors->has('rating'))
            <span class="text-red-500">{{$errors->first('rating')}}</span>
            @endif
        </div>
        <div>
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('price') }}"/>
            @if($errors->has('price'))
            <span class="text-red-500">{{$errors->first('price')}}</span>
            @endif
        </div>
        <div>
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cateogry</label>
            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>               
                @foreach($category as $cat)
                <option value="{{ $cat }}">{{ $cat }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="company_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
            <select id="company_id" name="company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="" disabled>Choose a user</option>
                @foreach(\App\Models\Company::all() as $company)
                    <option value="{{ $company->id }}" @if($company->id == old('user' , $company->company_id)) selected @endif>{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a></button>
    </form>
</div>
@endsection