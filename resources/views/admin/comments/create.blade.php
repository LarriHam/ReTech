@extends('layouts.admin')

@section('content')
<div class="px-4 py-4">
    <h3 class="text-2xl font-extrabold dark:text-white">Create Comments</h3>

    <form action="{{route('admin.comments.store')}}" method="post">
        @csrf
        <div>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text</label>
            <input type="text" name="text" id="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('text') }}"/>
            @if($errors->has('text'))
            <span class="text-red-500">{{$errors->first('text')}}</span>
            @endif
        </div>
        <div>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
            <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('date') }}"/>
            @if($errors->has('date'))
            <span class="text-red-500">{{$errors->first('date')}}</span>
            @endif
        </div>
        <div>
            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
            <select id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="" disabled>Choose a user</option>
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}" @if($user->id == old('user')) selected @endif>{{ $user->email }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a></button>
    </form>
</div>
@endsection