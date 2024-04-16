@extends('layouts.admin')

@section('content')

<div class="px-4 py-4">
    <h3 class="text-2xl font-extrabold dark:text-white">Edit Comment</h3>

    <form action="{{route('admin.comments.update', $comment->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text</label>
            <textarea id="text" name="text" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ old('text', $comment->text) }}</textarea>
            @if($errors->has('text'))
            <span class="text-red-500">{{$errors->first('text')}}</span>
            @endif
        </div>
        <div>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
            <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('date') ? : $comment->date }}"/>
            @if($errors->has('date'))
            <span class="text-red-500">{{$errors->first('date')}}</span>
            @endif
        </div>
        <div>
            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Studio</label>
            <select id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="" disabled>Choose a user</option>
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}" @if($user->id == old('user' , $comment->user_id)) selected @endif>{{ $user->email }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a></button>
    </form>
</div>
@endsection